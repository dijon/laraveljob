@extends('base')

@section('title', 'Images Index')

@section('sidebar')

    <div class="col-2">
        <h2>Филтър</h2>
        <form class="needs-validation" novalidate method="get">
            <div class="mb-3">
                <label>Автор</label>
                <select class="custom-select" required name="user">
                    <option selected disabled value="">Избери...</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Категория</label>
                <select class="custom-select" required name="category">
                    <option selected disabled value="">Избери...</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Филтрирай</button>
        </form>
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

    {{ $images->withQueryString()->links() }}

@endsection