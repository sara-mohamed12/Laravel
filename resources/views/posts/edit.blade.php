@extends('layout.app')

@section('content')

<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp"   placeholder="{{$post['title']}}">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Posted by</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp"   placeholder="{{$post['posted_by']}}">
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Created by</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp"   placeholder="{{$post['created_at']}}">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
  </form>

@endsection