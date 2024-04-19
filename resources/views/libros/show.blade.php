@extends('layouts.plantilla')

@section('title','libro '. $libro->titulo)


@section('content')
<a href="{{route('libros.index')}}">Volver a libros</a>

<h1> Este libro es: {{$libro->titulo}}</h1> <br>

<a href="{{route('libros.edit',$libro)}}">Editar libro</a>

<p><strong>El autor es: </strong> {{$libro->autor}}</p>
<p><strong>Su editorial es : </strong>{{$libro->editorial}}</p>
<p><strong>Editorial: </strong>{{$libro->editorial}}</p>
<p><strong>Contenido: </strong>{{$libro->contenido}}</p>

<form action="{{route('libros.destroy', $libro)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

@endsection
