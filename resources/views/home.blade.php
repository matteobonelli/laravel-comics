@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="bg-dark ">
    <div class="container py-5">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-2 mb-4">
                <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}" class="mb-3">
                <h5 class="text-uppercase text-light">{{ $comic['series'] }}</h5>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn text-uppercase ">Load more</button>
        </div>
    </div>
    
</main>

@endsection
