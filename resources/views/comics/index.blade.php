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
        <th scope="col">Azioni</th>
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
            <td>
              <button type="button" class="btn btn-primary"><a href="{{route('comics.show', $comic->id)}}" class="text-white">Visualizza</a></button>
              <button type="button" class="btn btn-warning mt-2"><a href="{{route('comics.edit', $comic->id)}}" class="text-white">Modifica</a></button>
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2 text-white">Elimina</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  

@endsection