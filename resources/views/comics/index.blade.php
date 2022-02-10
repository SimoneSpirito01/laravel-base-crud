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
              <button type="button" class="btn btn-primary mb-1"><a href="{{route('comics.show', $comic->id)}}" class="text-white">Visualizza</a></button>
              <button type="button" class="btn btn-warning mb-1"><a href="{{route('comics.edit', $comic->id)}}" class="text-white">Modifica</a></button>

              <!-- Button trigger modal -->
              <button type="button" class="toggle btn btn-danger text-white" data-toggle="modal" data-target="#exampleModal-{{$comic->id}}">
                Elimina
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal-{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ATTENZIONE!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Sei sicuro di voler eliminare questo elemento?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
                      <form data-id="{{$comic->id}}" class="my_form" action="{{route("comics.destroy",$comic->id)}}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="my_button btn btn-danger text-white" data-toggle="modal" data-target="#exampleModal">
                          Elimina
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  

@endsection