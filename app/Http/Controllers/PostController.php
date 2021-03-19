<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(){
        $posts=Post::paginate(5); //posts 3bara 3n object gwaha array of objects kol object gwaha bykon mn no3 post model w by3br 3n elrecord elly f table posts
        return view('posts.index',[
            'posts'=>$posts
        ]);
    }

    public function show($id){
        $post=Post::find($id);
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    public function create(){
        return view('posts.create',[
           'users'=>User::all()
        ]);
    }

    public function store(Request $myrequest){
       $data=$myrequest->all();
       Post::create($data);
       return redirect()->route('posts.index'); 
    }

    public function edit($id){
        $post=Post::find($id);
        $users = User::all();
        return view('posts.edit',[
            'post'=>$post,
            'users'=>$users
        ]);
    }

    public function update($id,Request $myrequest){
        $post=Post::find($id);
        $post->title=$myrequest->title;
        $post->description=$myrequest->description;
        $post->user_id=$myrequest->user_id;
        $post->save();   
        return redirect()->route('posts.index'); 
    }

    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('posts.index'); 
    }

}
