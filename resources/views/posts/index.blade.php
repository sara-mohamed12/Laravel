@extends('layouts.app')
  @section('content')
   <div class="text-center">
      <a href="{{route('posts.create')}}" class="btn btn-success mt-3">Create Post</a>
   </div>

   <div class="container mt-3">
    <table class="table">
    <thead>
        <tr>
            <th scope="col" style="color:red;">Pagination in lab 2</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post) <!-- kol post hena 3bara 3n record -->
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->user?$post->user->name:'user not found'}}</td>
            <td>{{$post->created_at->format('Y-m-d')}}</td>
            <td>
            <a href="{{ route('posts.show',['post'=>$post['id']]) }}" class="btn btn-info"> View</a>
            <a href="{{route('posts.edit',['post'=>$post['id']] )}}" class="btn btn-primary">Edit</a>
              <form action="{{route('posts.destroy',['post'=>$post['id']])}}" method="post" style="display:inline;">   
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete post?')">Delete</button>
              </form>             
            </td>
          </tr>
        @endforeach  
    </tbody>
    </table>
  </div>

    <div class="container">
       {{$posts->links()}}
    </div>
  </div>
  @endsection
  