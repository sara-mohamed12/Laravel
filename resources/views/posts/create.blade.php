@extends('layouts.app')
 @section('content')
   <div class="container">
    <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="m-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>
        <div class="m-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="m-3">
            <label for="creator" class="form-label">Post Creator</label>
            <select id="creator"  class="form-control"  name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}} </option>
                @endforeach 
            </select>
        </div>

        <button  type="submit" class="btn btn-success m-3">Create</button>
    </form>
   </div> 
@endsection 
         
