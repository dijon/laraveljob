@extends('base')

@section('title', 'Registration')

@section('content')

    <h2>Register</h2>
    <form method="POST" action="{{ url('register') }}">
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
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        @include('layouts.form_errors')
    </form>

@endsection