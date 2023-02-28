@extends('layout.main')

@section('content') 
    <!-- main-top -->
    <section class="main-top">
        <div class="title"> Current Series </div>
        <div class="container">
            @foreach($comics as $comic)
                <div class="card">
                    <figure>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
                    </figure>
                    <figcaption> <a href="{{ route('comics.show', $comic)}}"> {{ $comic['series'] }} </a> </figcaption>
                </div>
            @endforeach
        </div>
    </section>
    <!-- main bottom -->
    <section id="banner">
        <ul class="container">
            @foreach($banners as $banner)
                <li>
                    <img src="{{Vite:: asset('resources/images/'.$banner['image'])}}" alt="buy-comics-digital">
                    <p>{{$banner['text']}}</p>
                </li>
            @endforeach
        </ul>
    </section>
@endsection