@php
    
$catalog = config('db.catalog')

@endphp

<div class="catalog-bg" id='catalog'>
    <div class="container">
        <ul class="nav d-flex justify-content-between align-items-center">
            @foreach($catalog as $item)
            <li class="nav-item">
                <div class="d-flex align-items-center">
                    <img src="{{$item['image']}}" alt="{{$item['text']}}">
                    <a class="nav-link text-uppercase" href="{{$item['url']}}">{{ $item['text'] }}</a>

                </div>

            </li>
            @endforeach
        </ul>
    </div>

</div>