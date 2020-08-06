@extends('base')

@section('title', 'Images Index')

@section('content')

    @foreach($image as $img)
        <div class="card m-5" style="width: 18rem;">
            <img src="{{ asset('storage/'.$img->name) }}" class="card-img-top" alt="{{ $img->title }}">
            <div class="card-body">
                <p class="card-text">{{ $img->description }}</p>
            </div>
        </div>
    @endforeach

@endsection