<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $data = $request->all();

        $type = isset($data['type']) ? $data['type'] : 'database';

        if($type == 'database'){
            return $this->getFilmsFromDatabase($data);
        }else{
            return $this->getFilmsFromElastic($request);
        }


    }

    public function getFilmsFromDatabase($data)
    {
        $films = Film::query();

        if(isset($data['search'])){
            $films->where('name', 'like', '%' . $data['search'] . '%');
        }

        $films = $films->get();
        return self::success('FIlms List', ['data' => $films]);
    }

    public function getFilmsFromElastic($request)
    {
        $elastic = new ElasticSearchController();
        return $elastic->search($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //
        $validator = Validator::make($data, [
            'name' => 'required|string|unique:films,name',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'ticket_price' => 'required|integer',
            'country' => 'required|string',
            'genre' => 'required|string',
            'photo' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'name' => $data['name'],
            'description' => $data['description'],
            'release_date' => $data['release_date'],
            'ticket_price' => $data['ticket_price'],
            'country' => $data['country'],
            'genre' => $data['genre'],
            'photo' => $data['photo'],
        ];

        $film = Film::create($obj);

        return self::success('Film Created', ['data' => $film]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $film = Film::find($id);
        if (!$film) {
            return self::failure('Film Not Found');
        }

        $averageRating = $film->ratings->avg('rating');
        $film = $film->load('comments')->toArray();
        $film['average_rating'] = $averageRating;

        return self::success('Film Detail', ['data' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        //
        $validator = Validator::make($data, [
            'name' => 'required|string|unique:films,name,except,' . $id . ' ',
            'description' => 'required|string',
            'release_date' => 'required|date',
            'ticket_price' => 'required|integer',
            'country' => 'required|string',
            'genre' => 'required|string',
            'photo' => 'required|string',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $obj = [
            'name' => $data['name'],
            'description' => $data['description'],
            'release_date' => $data['release_date'],
            'ticket_price' => $data['ticket_price'],
            'country' => $data['country'],
            'genre' => $data['genre'],
            'photo' => $data['photo'],
        ];

        $film = Film::create($obj);

        return self::success('Film Created', ['data' => $film]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $film = Film::find($id);
        if (!$film) {
            return self::failure('Film Not Found');
        }

        $film->delete();

        return self::success('Film Deleted');
    }

    public function getComments(string $id)
    {
        $film = Film::find($id);
        if (!$film) {
            return self::failure('Film Not Found');
        }

        $comments = $film->comments->load('user');

        return self::success('Comments List', ['data' => $comments]);
    }

    public function postFilmComments(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'film_id' => 'required|integer|exists:films,id',
            'comment' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $user = Auth::user();
        $obj = [
            'film_id' => $data['film_id'],
            'user_id' => $user->id,
            'comment' => $data['comment'],
        ];

        $comment = Comment::create($obj);

        $ratingObj = [
            'film_id' => $data['film_id'],
            'user_id' => $user->id,
            'rating' => $data['rating'],
        ];

        $rating = Rating::create($ratingObj);

        return self::success('Comment Created', ['data' => [
            'comment' => $comment,
            'rating' => $rating
        ]]);
    }
}
