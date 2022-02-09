@extends('layouts.base')

@section('content')
    
<h1>Tabella dei fumetti</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Serie</th>
        <th scope="col">Tipo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Data di vendita</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->sale_date}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  

@endsection