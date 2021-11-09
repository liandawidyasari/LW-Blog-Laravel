<?php

namespace App\Http\Controllers;

use App\Models\Certif;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
        ]);
        // return view('certifs', [
        //     "title" => "Certifs",
        //     "certifs" => Certif::all()
        // ]);
    }
    
    

    // public function show($slug)
    // {
    //     return view ('post', [
    //     "title" => "Single Post",
    //     "post" => Post::find($slug)
    // ]);
    // }
}
