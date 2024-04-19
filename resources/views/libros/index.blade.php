@extends('layouts.plantilla')

@section('title','libros')


@section('content') 


<h1>Listado de libros</h1><br>
<a href="{{route("libros.create")}}">Añadir libro</a>
<ul><br>
    @foreach ($libros as $libro)
        <li>
            <a href="{{route('libros.show',$libro->id)}}">{{$libro->titulo}}</a>
        </li>
    @endforeach

</ul>
{{$libros->links()}}

@endsection
 