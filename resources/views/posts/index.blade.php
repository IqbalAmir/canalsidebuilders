@extends('layouts.app')

@section('content')
  <h1>What Our Customers Have to Say</h1>
  <a href="/canalsidebuilders/public/home" class="btn btn-primary">Go To Your Reviews</a>

  @if(count($posts) > 0)
    @foreach ($posts as $post)
      <div class="well">
        <h3><a href="/canalsidebuilders/public/posts/{{$post->id}}"> Review By {{$post->user->name}}</a></h3>
        <small>Written on {{$post->created_at}}

      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif

@endsection
