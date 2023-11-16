<?php
// use Illuminate\Support\Facades\Auth;

// // Retrieve the user ID of the currently logged-in user
// $userId = Auth::id();

?>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form action="" method="post">
            @csrf
            <div class="form-control">
                <label for="title">Title</label>
                <input type="text" name="title" id="">
            </div>

            <div class="form-control">
                <label for="summary">Summary</label>
                <input type="text" name="summary" id="">
            </div>

            <div class="form-control">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="4" cols="50" style="display: block;"> </textarea>
            </div>

            <input type="hidden" name="user_id" id="user_id" value="{{$userId}}">
            
            <button type="submit" class="btn btn-light">Maak bericht</button>

        </form>
    </div>
</div>
@endsection