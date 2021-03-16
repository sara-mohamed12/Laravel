@extends('layout.app')

@section('content')

<a href="{{route('posts.create')}}" class="btn btn-success  mt-5">Create Post</a>

<table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created by</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td class="col">
            <a href="{{route('posts.show',['post'=>$post['id']])}}" class="btn btn-info">View</a>
            <a href="{{route('posts.edit')}}" class="btn btn-primary">Edit</a>
            <a href="{{route('posts.delete')}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection