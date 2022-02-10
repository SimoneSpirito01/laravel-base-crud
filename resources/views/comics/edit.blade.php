@extends('layouts.base')

@section('content')

<h1 class="mb-5">Modifica fumetto: {{$comic->title}}</h1>
<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input value="{{$comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo">
    </div>
    <div class="form-group">
        <label for="thumb">Link immagine</label>
        <input value="{{$comic->thumb}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il link dell'immagine">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input value="{{$comic->price}}" type="number" step="0.1" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="sale_date">Data di vendita</label>
        <input value="{{$comic->sale_date}}" type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="description" class="form-label">Inserisci la descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione">{{$comic->description}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Invia</button>
    <button type="button" class="btn btn-danger mt-3 ml-1"><a href="{{route('comics.index')}}" class="text-white">Torna alla tabella</a></button>
  </form>
    
@endsection