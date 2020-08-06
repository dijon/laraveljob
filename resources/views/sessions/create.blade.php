@extends('base')

@section('title', 'Login')

@section('content')

    <h2>Влизане</h2>
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="username">Потребител:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>

        <div class="form-group">
            <label for="password">Парола:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Влез</button>
        </div>
    </form>

@endsection