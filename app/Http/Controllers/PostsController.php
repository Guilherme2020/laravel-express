<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $posts =  \App\Post::all();

        return view('posts.index',compact('posts'));
    }

}
