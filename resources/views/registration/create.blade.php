@extends('base')

@section('title', 'Registration')

@section('content')

    <h2>Регистрация</h2>
    <form method="POST" action="{{ url('register') }}">
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
            <button type="submit" class="btn btn-primary">Създай</button>
        </div>
    </form>

@endsection