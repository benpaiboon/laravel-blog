@extends('layouts/app')

@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
    </ol>
  </nav>  
  <div class="card" style="width: 100%; min-height: 100vh;">
    <div class="card-body">
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
      {!! Form::close() !!}

      <a href="/posts/{{$post->id}}/edit/" style="margin-right:5px;" class="btn btn-outline-secondary btn-sm float-right" role="button">Edit</a>
      <h3>{{$post->title}}</h3>
      <p>{!!$post->body!!}</p>
      <small>Written on {{$post->created_at}}</small>
    </div>
  </div>
@endsection