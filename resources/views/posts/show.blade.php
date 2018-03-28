@extends('layouts/app')

@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
    </ol>
  </nav>  
  <div class="card">
    <div class="card-body">
      <h3>{{$post->title}}</h3>
      <p>{!!$post->body!!}</p>
      <small>Written on {{$post->created_at}}</small>
    </div>
  </div>
  <a href="/posts/{{$post->id}}/edit/" class="btn btn-secondary" role="button">Edit</a>
  
  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!! Form::close() !!}
@endsection