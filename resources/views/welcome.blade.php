@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <p style="margin-top: 50">Leuk je weer te zien op de blog pagina. Hier kunnen mensen al hun verhaaltjes delen. <br>
                Klik hier om alle berichten te zien.</p>
                <a href="{{ route('overzicht-berichten') }}" class="btn btn-light">Alle blogs</a>

            </div>
            <div class="col">
                <img class="img-thumbnail" src="{{ asset('blog.png') }}" alt="Blog">
            </div>
        </div>
    </div>
@endsection





 