@extends('layouts.base')

@section('content')

<h1 class="mb-5">Modifica fumetto: {{$comic->title}}</h1>
<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input value="{{old('title') ?? $comic->title}}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input value="{{old('series') ?? $comic->series}}" type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie">
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input value="{{old('type') ?? $comic->type}}" type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo">
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="thumb">Link immagine</label>
        <input value="{{old('thumb') ?? $comic->thumb}}" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci il link dell'immagine">
        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input value="{{old('price') ?? $comic->price}}" type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sale_date">Data di vendita</label>
        <input value="{{old('sale_date') ?? $comic->sale_date}}" type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci il prezzo">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="form-label">Inserisci la descrizione</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione">{{old('description') ?? $comic->description}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Modifica</button>
    <button type="button" class="btn btn-danger mt-3 ml-1"><a href="{{route('comics.index')}}" class="text-white">Torna alla tabella</a></button>
  </form>
    
@endsection