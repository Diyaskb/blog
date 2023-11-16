@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <form action="" method="post">
                @csrf
                <div class="form-control">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="">
                </div>

                <div class="form-control">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="">
                </div>

                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="">
                </div>

                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="">
                </div>

                <div class="form-control">
                    <label for="role">Role</label>
                    <select name="role" id="">
                        <option value="admin">Admin</option>
                        <option value="blogger">Blogger</option>
                    </select>
                </div>
                <button type="submit">Maak aan</button>

        </form>
    </div>
</div>
@endsection