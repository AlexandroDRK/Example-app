<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function show(Post $post){

        // Carrega o usuário ao qual o post está relacionado:
        $post ->load('user');
        dd($post);
        return $post;
    }
}
