@extends('layouts.app')
@section('content')

    <div>
        <a href="{{route('maak-gebruiker')}}">Maak nieuwe gebruiker</a>
    </div>

    @foreach ($gebruikers as $gebruiker)
    {{$gebruiker->firstname}}
        
    @endforeach
@endsection 