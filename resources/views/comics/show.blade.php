@extends('layouts.base')

@section('content')
    
<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="my-5">
<p>{{$comic->description}}</p>
<button type="button" class="btn btn-primary"><a href="{{route('comics.index')}}" class="text-white">Torna alla tabella</a></button>
<button type="button" class="btn btn-warning ml-2"><a href="{{route('comics.edit', $comic->id)}}" class="text-white">Modifica</a></button>
<!-- Button trigger modal -->
<button type="button" class="toggle btn btn-danger text-white ml-2" data-toggle="modal" data-target="#exampleModal-{{$comic->id}}">
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


@endsection