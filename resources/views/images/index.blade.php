@extends('base')

@section('title', 'Images Index')

@section('sidebar')

    <div class="col-2">
        <h2>Филтър</h2>
        <p>filter user</p>
        <p>filter category</p>
    </div>

@endsection

@section('content')

    <div class="row my-5">
        @foreach($images as $image)
            <div class="col">
                <a href="{{ route('images.show', ['image' => $image->id]) }}"><img src="{{ asset('storage/'.$image->name) }}" class="img-fluid img-thumbnail"></a>
            </div>
        @endforeach
    </div>
    
    {{ $images->links() }}

@endsection