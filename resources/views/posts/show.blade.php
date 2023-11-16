@extends('layouts.app')
@section('content')

{{-- 
<h1>{{$post->title}}</h1>
<p>{{$post->summary}}</p>
<p>{{$post->content}}</p>
<p>{{$post->user_id}}</p> --}}



<div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Blog posts -->
        <div class="blog-post">
          <h2 class="blog-post-title">{{$post->title}}</h2>
          <p class="blog-post-meta">{{$post->user_id}}</p>
          <p class="blog-post-meta">{{$post->summary}}</p>
          <p>{{$post->content}}</p>

        </div>
      </div>
    </div>
</div>


<a href="{{route('posts.edit', $post)}}" class="btn btn-dark">Edit bericht</a>
<br><br>
@endsection