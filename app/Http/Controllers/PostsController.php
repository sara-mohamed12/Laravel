<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        $posts= [
            ['id' => 1, 'title' => 'Laravel', 'description' => 'This Is description', 'posted_by' => 'Sara', 'created_at' => '2021-03-13', 'email'  =>  'sara@gmail.com'],
            ['id' => 2, 'title' => 'PHP', 'description' => 'This Is description', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-12', 'email'   =>  'sara@gmail.com'],
            ['id' => 3, 'title' => 'JS', 'description' => 'This Is description', 'posted_by' => 'Aya', 'created_at' => '2021-03-11', 'email' => 'sara@gmail.com'],
        ];

        return view('posts.index' ,[
            'posts' =>  $posts
        ]);

    }

    public function create(){

        return view('posts.create');

    }

    public function edit(){

        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Show Post Description', 'posted_by' => 'Sara', 'created_at' => '2021-03-13', 'email' => 'sara@gmail.com'];

        return view('posts.edit', [
            'post' => $post
        ]);
    }


    public function store(){

        return redirect()->route('posts.index');

    }

    public function show($post)
    {
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Show Post Description', 'posted_by' => 'Sara', 'created_at' => '2021-03-13', 'email' => 'sara@gmail.com'];

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function delete(){

        return redirect()->route('posts.index');

    }



}
