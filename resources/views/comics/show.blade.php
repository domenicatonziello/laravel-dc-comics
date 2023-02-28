@extends('layout.main')

@section ('content')
    {{-- main-top --}}
    <section id="comic" class="show">
        {{-- main-top --}}
        <div class="container d-flex">
            <div class="col-left">
                <h1> {{ $comic->title }}</h1>
                <div class="table d-flex">
                    <div>U.S. price: {{ $comic->price}}</div>
                    <div class="text-end">AVAILABLE</div>
                </div>
                <p> {{ $comic->description}} </p>
            </div>
            <div class="col-right text-end">
                <p>Pubblicità</p>
                <img src="{{ Vite::asset('resources/images/adv.jpg')}}" alt="pubblicità">
            </div>
        </div>
    </section>
    <section id="main-bottom" class="show">
        {{-- main bottom --}}
        <div class="container d-flex ">
            <div class="col-left">
                <h4>Talent</h4>
                <ul>
                    <li class="d-flex">
                        <div class="col-small">
                            <h5>Art By:</h5>
                        </div>
                        <div class="col-big">
                            <p>{{$comic->artists }}</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="col-small">
                            <h5> Written By:</h5>
                        </div>
                        <div class="col-big">
                            <p>{{$comic->writers }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-right">
                <h4>Specs</h4>
                <ul>
                    <li class="d-flex">
                        <div class="col-small">
                            <h6>Series:</h6>
                        </div>
                        <div class="col-big">
                            <p>{{$comic->type }}</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="col-small">
                            <h6> U.S Price:</h6>
                        </div>
                        <div class="col-big">
                            <p>{{$comic->price }}</p>
                        </div>
                    </li>
                    <li class="d-flex">
                        <div class="col-small">
                            <h6> Sale Date:</h6>
                        </div>
                        <div class="col-big">
                            <p>{{$comic->sale_date }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>    
@endsection