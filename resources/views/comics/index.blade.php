@extends('layouts.base')

@section('content')
    
<h1>Tabella dei fumetti</h1>
<button type="button" class="btn btn-success mt-2 mb-4"><a href="{{route('comics.create')}}" class="text-white">Aggiungi un fumetto</a></button>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Tipo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Data di vendita</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}$</td>
            <td>{{$comic->sale_date}}</td>
            <td><button type="button" class="btn btn-primary"><a href="{{route('comics.show', $comic->id)}}" class="text-white">Visualizza</a></button></td>
<td></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  

@endsection