@extends('base')

@section('title', 'Login')

@section('content')

    <h2>Log In</h2>
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

@endsection