@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main class="bg-dark " id='comics'>
    <div class="container py-5">
        <div class="row">
            @foreach ($comics as $key => $comic)
            <div class="col-12 col-md-2 mb-4">
                <a href="{{route('comics.show', $key)}}">
                    <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}" class="mb-3">
                <h5 class="text-uppercase text-light">{{ $comic['series'] }}</h5>
                </a>
                
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn text-uppercase ">Load more</button>
        </div>
    </div>
    
</main>

@endsection