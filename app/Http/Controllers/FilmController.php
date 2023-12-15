<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $films = Film::all();
        return self::success('FIlms List', ['films' => $films]);
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
}
