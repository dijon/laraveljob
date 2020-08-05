@extends('base')

@section('title', 'Images Index')

@section('content')
    @foreach($latest_images as $image)
    <div class="row">
        <div class="col">
            <a href="{{ $image->id }}"><img src="{{ $image->name }}" class="img-thumbnail"></a>
        </div>
    </div>
    @endforeach
@endsection