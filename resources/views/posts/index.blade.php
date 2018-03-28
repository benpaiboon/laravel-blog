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
    @foreach($posts as $post)
      <div class="card">
        <div class="card-body">
          <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on {{$post->created_at}}</small>
        </div>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
      <p>No posts found</p>
  @endif
@endsection