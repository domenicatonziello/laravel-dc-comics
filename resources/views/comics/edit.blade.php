@extends ('layout.main')

@section('content')
<section id="form" class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="POST" action="{{ route('comics.update', $comic->id) }}" class="row">
        @method('PUT')
        @csrf
        <div class="col-6" class="form-label">
          <label for="title"> Titolo Fumetto </label>
          <input type="text" required class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}" placeholder="Titolo Fumetto">
        </div>
        <div class="col-6" class="form-label">
          <label for="series">Serie</label>
          <input type="text" required class="form-control" id="series" name="series"value="{{ old('series', $comic->series)}}" placeholder="Serie">
        </div>
        <div class="col-12" class="form-label">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" class="form-control" cols="120" rows="5"> {{ old('description', $comic->description) }}</textarea>
        </div>
        <div class="col-6" class="form-label">
            <label for="thumb"> Immagine </label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb)}}" placeholder="Inserisci url immagine">
        </div>
        <div class="col-6" class="form-label">
            <label for="price"> Prezzo </label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}" placeholder="Inserisci prezzo">
        </div>
        <div class="col-6" class="form-label">
            <label for="date"> Data Promozione </label>
            <input type="text" class="form-control" id="date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}" placeholder="Inserisci data promozione">
        </div>
        <div class="col-6" class="form-label">
            <label for="type"> Genere </label>
            <input type="text" required class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}" placeholder="Inserisci il genere">
        </div>
        <div class="col-12" class="form-label">
            <label for="artists">Artisti</label>
            <textarea name="artists" id="artists" class="form-control" cols="120" rows="5">{{ old('artists', $comic->artists)}}</textarea>
        </div>
        <div class="col-12" class="form-label">
            <label for="writers">Scrittori</label>
            <textarea name="writers" id="writers" class="form-control" cols="120" rows="5">{{ old('writers', $comic->writers)}}</textarea>
        </div>   
        <button type="submit" class="btn"> Salva </button>
        <a class="btn" href="{{route('comics.show', $comic->id)}}"> Indietro </a>    
    </form>
</section>
@endsection