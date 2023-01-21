<?php

namespace App\Http\Controllers;
use TCG
use Illuminate\Http\Request;

class Blog extends Controller
{
    //
    public function index(){
        $posts = Post::orderby paginate('15');
        return view('blog.index');
    }

}