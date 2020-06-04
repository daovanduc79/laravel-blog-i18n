<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function index()
    {
        $posts = [];
        return view('posts.list', compact('posts'));
    }

    public function store()
    {

    }
}
