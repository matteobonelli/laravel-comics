@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container">
        <h1>Homepage</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-2 mb-4">
                <img src="{{$comic['thumb']}}" :alt="{{$comic['title']}}" class="mb-3">
                <h5 class="text-uppercase">{{ $comic['series'] }}</h5>
            </div>
            @endforeach
        </div>
    </div>
    
</main>

@endsection