@extends('layouts.base')

@section('content')
    
<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="my-5">
<p>{{$comic->description}}</p>
<button type="button" class="btn btn-danger"><a href="{{route('comics.index')}}" class="text-white">Torna alla tabella</a></button>

@endsection