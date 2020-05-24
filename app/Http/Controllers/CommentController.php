<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    protected $guarded = [];

    public function create(Request $request) {
        $comment = Comment::create([
            'post_id'=> $request['post_id'],
            'body'=> $request['body'],
            'user_id'=> $request['user_id']
        ]);
    }
}
