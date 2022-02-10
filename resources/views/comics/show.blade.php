@extends('layouts.base')

@section('content')
    
<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="my-5">
<p>{{$comic->description}}</p>
<button type="button" class="btn btn-primary"><a href="{{route('comics.index')}}" class="text-white">Torna alla tabella</a></button>
<button type="button" class="btn btn-warning ml-2"><a href="{{route('comics.edit', $comic->id)}}" class="text-white">Modifica</a></button>
<form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger ml-2 text-white">Elimina</button>
</form>


@endsection