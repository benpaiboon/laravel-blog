@extends('layouts/app')

@section('content')
    {{--  <h1>{{$title}}</h1>  --}}
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">{{$title}}</h1>
            <p class="lead text-muted">This is simple blog post application for manage CRUD process.</p>
            <p>
                {{--  <a href="/laravel-blog/public/login" class="btn btn-primary my-2">Login</a>
                <a href="/laravel-blog/public/register" class="btn btn-secondary my-2">Register</a>  --}}
                <a href="/posts" class="btn btn-primary btn-lg">Lean More</a>
            </p>
        </div>
    </section>
@endsection

