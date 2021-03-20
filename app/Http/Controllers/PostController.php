<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
// use Cviebrock\EloquentSluggable\Services\SlugServices;
use Cviebrock\EloquentSluggable\Services\SlugService;
// use Cviebrock\EloquentSluggable\Sluggable;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{


    public function index()
    {
        $posts = Post::paginate(2);
        // $dt = Carbon::parse($post['cerated_at'],'UTC');
        // $format2 = $dt->isoFormat('YY-M-D');
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {

        $post = Post::find($post);

        $post->slug = SlugService::createSlug(Post::class, 'slug', $post->title);


        // $post = Post::where('title', 'Javascript')->first(); //this makes limit 1 and returns first result  select * from posts where title = 'Javascript' limit 1;
        // $postsWithTitle = Post::where('title', 'Javascript')->get(); //this gets all results select * from posts where title = 'Javascript';
        $dt = Carbon::parse($post['cerated_at'],'UTC');
        
        $time_format = $dt->isoFormat('MMMM Do YYYY, h:mm:ss a');
        return view('posts.show', [
            'post' => $post,
            'time_format' => $time_format
        ]);
    }

    public function create()
    {
        return view('posts.create',[
            'users' => User::all()
        ]);
    }

    public function store(StorePostRequest $myRequestObject)
    {
        $data = $myRequestObject->all();
        
        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit' , [
            'post' => $post
        ]);
    }

    public function update($post, StorePostRequest $myRequestObject)
    {
        $data = $myRequestObject->all();
        $affected = DB::table('posts')
              ->where('id', $post)
              ->update([
                  'title' => $data['title'],
                  'description' => $data['description']
                  ]);
         return redirect()->route('posts.index');
    }

    public function destroy($post)
    {
        Post::destroy($post);
        return redirect()->route('posts.index');
    }
    
}
