<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Validator;

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $ratings = Rating::query();

        // You can add any additional filters or conditions here
        if(isset($data['search'])){
            $ratings->where('score', '=', $data['search']);
        }

        $ratings = $ratings->get();
        return self::success('Ratings List', ['data' => $ratings]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $data = $request->all();

        $validator = Validator::make($data, [
            'score' => 'required|numeric|between:1,5', // Assuming ratings are on a scale of 1 to 5
            'user_id' => 'required|exists:users,id', // Assuming ratings are associated with users
            'film_id' => 'required|exists:films,id', // Assuming ratings are associated with films
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $rating = Rating::create([
            'score' => $data['score'],
            'user_id' => $data['user_id'],
            'film_id' => $data['film_id'],
        ]);

        return self::success('Rating Created', ['data' => $rating]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rating = Rating::find($id);
        if (!$rating) {
            return self::failure('Rating Not Found');
        }

        return self::success('Rating Detail', ['data' => $rating]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'score' => 'required|numeric|between:1,5',
            'user_id' => 'required|exists:users,id',
            'film_id' => 'required|exists:films,id',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $rating = Rating::find($id);

        if (!$rating) {
            return self::failure('Rating Not Found');
        }

        $rating->update([
            'score' => $data['score'],
            'user_id' => $data['user_id'],
            'film_id' => $data['film_id'],
        ]);

        return self::success('Rating Updated', ['data' => $rating]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rating = Rating::find($id);
        if (!$rating) {
            return self::failure('Rating Not Found');
        }

        $rating->delete();

        return self::success('Rating Deleted');
    }
}
