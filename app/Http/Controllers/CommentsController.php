<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $comments = Comment::query();

        // You can add any additional filters or conditions here
        if(isset($data['search'])){
            $comments->where('content', 'like', '%' . $data['search'] . '%');
        }

        $comments = $comments->get();
        return self::success('Comments List', ['data' => $comments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id', // Assuming comments are associated with users
            'film_id' => 'required|exists:films,id', // Assuming comments are associated with films
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $comment = Comment::create([
            'content' => $data['content'],
            'user_id' => $data['user_id'],
            'film_id' => $data['film_id'],
        ]);

        return self::success('Comment Created', ['data' => $comment]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return self::failure('Comment Not Found');
        }

        return self::success('Comment Detail', ['data' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'film_id' => 'required|exists:films,id',
        ]);

        if ($validator->fails()) {
            return self::failure($validator->errors()->first());
        }

        $comment = Comment::find($id);

        if (!$comment) {
            return self::failure('Comment Not Found');
        }

        $comment->update([
            'content' => $data['content'],
            'user_id' => $data['user_id'],
            'film_id' => $data['film_id'],
        ]);

        return self::success('Comment Updated', ['data' => $comment]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        if (!$comment) {
            return self::failure('Comment Not Found');
        }

        $comment->delete();

        return self::success('Comment Deleted');
    }
}

