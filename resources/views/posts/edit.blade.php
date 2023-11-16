@extends('layouts.app')
@section('content')
<h1>Update Blog berichten</h1>


<form action="{{route('posts.update', $post)}}" method="post">
    @csrf

    <div class="form-group">
        <label for="title_post">Titel</label>
        <input type="text" name="title_post" id="title_post" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="summary_post">Overzicht </label>
        <input type="text" name="summary_post" id="summary_post" value="{{$post->summary}}">
    </div>  
    <div class="form-group">
        <label for="content_post">Inhoud</label>
        <input type="text" name="content_post" id="content_post" value="{{$post->content}}">
    </div>
    <div class="form-group">
        <label for="user_id_post">Gemaakt door</label>
        <input type="text" name="user_id_post" id="user_id_post" value="{{$post->user_id}}">
    </div>
    <button type="submit">Update bericht</button>
  
</form>
@endsection
