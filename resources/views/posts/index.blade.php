@extends('layouts.app')
@section('content')
<div class="container">
    <div>
            <h1>Overzicht Berichten</h1>
            <p style="text-align: right"><a href="{{route('maak-bericht')}}" class="btn btn-light" >Maak nieuwe bericht</a></p>
    </div>
  <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4 mb-4">
          <div class="card">
              <div class="card-body">
                <a href="{{route('posts.show', $post)}}" class="btn btn-light" ><h5 class="card-title">{{$post->title}}</h5></a>
                  <h6 class="card-subtitle mb-2 text-muted">{{$post->summary}}</h6>
                  <p class="card-text">Gemaakt door: {{$post->user_id}}</p>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
@endsection
