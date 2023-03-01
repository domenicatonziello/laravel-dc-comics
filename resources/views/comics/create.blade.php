@extends('layout.main')

@section ('content')
    <section id="form" class="container">
        <form  method="POST" action="{{ route('comics.store') }}" class="row">
            @csrf
            <div class="col-6" class="form-label">
              <label for="title"> Titolo Fumetto </label>
              <input type="text" required class="form-control" id="title" name="title" placeholder="Titolo Fumetto">
            </div>
            <div class="col-6" class="form-label">
              <label for="series">Serie</label>
              <input type="text" required class="form-control" id="series" name="series" placeholder="Serie">
            </div>
            <div class="col-12" class="form-label">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" class="form-control" cols="120" rows="5"></textarea>
            </div>
            <div class="col-6" class="form-label">
                <label for="thumb"> Immagine </label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci url immagine">
            </div>
            <div class="col-6" class="form-label">
                <label for="price"> Prezzo </label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci prezzo">
            </div>
            <div class="col-6" class="form-label">
                <label for="date"> Data Promozione </label>
                <input type="text" class="form-control" id="date" name="sale_date" placeholder="Inserisci data promozione">
            </div>
            <div class="col-6" class="form-label">
                <label for="type"> Genere </label>
                <input type="text" required class="form-control" id="type" name="type" placeholder="Inserisci il genere">
            </div>
            <div class="col-12" class="form-label">
                <label for="artists">Artisti</label>
                <textarea name="artists" id="artists" class="form-control" cols="120" rows="5"></textarea>
            </div>
            <div class="col-12" class="form-label">
                <label for="writers">Scrittori</label>
                <textarea name="writers" id="writers" class="form-control" cols="120" rows="5"></textarea>
            </div>    
            <button type="submit" class="btn"> Invia </button>
            <button type="button" class="btn">
                <a href="{{route('comics.index')}}"> Indietro </a>
            </button>
        </form>
    </section>
@endsection