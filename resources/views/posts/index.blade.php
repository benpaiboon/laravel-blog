@extends('layouts/app')

@section('content')
  <div class="d-flex justify-content-between">
    <div>
      <h3>Posts</h3>
    </div>
    <div>
      <a class="btn btn-success float-right" role="button" href="posts/create">Create Post</a>
    </div>
  </div>
  @if(count($posts) > 0)
  <div class="row">
    @foreach($posts as $post)
    <div class="col-sm-6 col-md-4 col-lg-3">    
      <div class="card" style="margin-top:10px; margin-bottom:10px;">
        <img class="card-img-top" src="//placehold.it/720x350" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <p class="card-text">{!!$post->body!!}</p>
          <p class="card-text"><small class="text-muted">Last updated {{$post->updated_at}}</small></p>

          {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
          {!! Form::close() !!}
          <a href="/posts/{{$post->id}}/edit/" style="margin-right:5px;" class="btn btn-outline-secondary btn-sm float-right" role="button">Edit</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{$posts->links()}}
  @else
      <p>No posts found</p>
  @endif
@endsection