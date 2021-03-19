@extends('layouts.app')
 @section('content')
   <div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Post info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title :- {{$post->title}}</h5> 
            <p class="card-text">Description :- {{$post->description}}</p>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name :- {{$post['title']}}</h5> 
            <p class="card-text">Email :- {{$post->user->email}}</p>
            <p class="card-text">Created At :- {{$post['created_at']}}</p>
        </div>
    </div>
   </div>
@endsection 
         
