@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                 @if($errors->has('title'))
                       <div class="error alert alert-danger mt-1 p-1">{{ $errors->first('title') }}</div>
                 @endif
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description"></textarea>
                 @if($errors->has('description'))
                       <div class="error alert alert-danger mt-1 p-1">{{ $errors->first('description') }}</div>
                 @endif
    </div>
    <div class="mb-3">
      <label for="post_creator" class="form-label">Post Creator</label>
      <select class="form-control" name="user_id">
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div>
    
    <button type="submit" class="btn btn-success">Create</button>
  </form>

@endsection