@extends('layout.app')

@section('content')
  <div class="card  mt-2" style="background-color: lightpink;">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$post['title']}}</h5>
      <p class="card-text">{{$post['description']}}</p>
    </div>
  </div>

  <div class="card  mt-2" style="background-color: lightpink;">
    <div class="card-header">
      Post Created info
    </div>
    <div class="card-body">
      <h5 class="card-title">Name:<p>  {{$post['posted_by']}}</p></h5>
      <h5 class="card-title">Email:<p>   {{$post['email']}}</p></h5>
      <h5 class="card-title">Created_at:<p>   {{$post['created_at']}}</p></h5>

    </div>
  </div>
@endsection
