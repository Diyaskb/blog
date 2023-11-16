
@extends('layouts.app')
@section('content')
<br><br><br><br><br>

<div class="container">
    <div class="row">
        <h3>Weet je zeker dat u wilt uitloggen?</h3>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <p><button type="submit" class="btn btn-dark">Ja, ik weet het zeker</button></p>    
        </form>


        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
@endsection


