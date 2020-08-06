@extends('base')

@section('title', 'Images Index')

@section('content')

    <div class="row">
    @foreach($images as $image)
        <div class="col">
            <a href="{{ route('images.show', ['image' => $image->id]) }}"><img src="{{ asset('storage/'.$image->name) }}" class="img-fluid img-thumbnail"></a>
        </div>
    @endforeach
    </div>

@endsection