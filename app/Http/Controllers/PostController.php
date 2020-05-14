<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use App\DB;

class PostController extends Controller
{
    public function all() {

        // $Posts = Post::with(['user'])->where('user_id',1)->get();

        $Posts = Post::with(['comments', 'user', 'comments.user'])->get(); //TODO latest
        return response()->json([ 'posts' => $Posts ]);
    }
    
    public function single($post_id) {
    // public function show(Post $post_id)     from ABRAM 
        $Post = Post::with(['comments', 'user'])->where('id', $post_id)->get();
        return response()->json([ 
            'post' => $Post
        ]);
    }
}