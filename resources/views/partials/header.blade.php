@php
$navbar = config('db.navbar'); 

@endphp

<header class="container my-4" id='mainheader'>
    <div class="d-flex justify-content-between align-items-center">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link text-uppercase {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}" href="{{route('comics.index')}}">Comics</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>
    </div>


</header>

<div class="jumbo-container">
</div>