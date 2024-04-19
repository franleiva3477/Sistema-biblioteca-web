@extends('layouts.plantilla')

@section('title','persona '. $persona->nombre)


@section('content')

<h1> Este libro es {{$persona->nombre}}</h1>
<a href="{{route('personas.index')}}">Volver a personas</a> <br> <br>
<a href="{{route('personas.edit',$persona)}}">Editar persona</a>

<p><strong>El nombre es: </strong> {{$persona->nombre}}</p>
<p><strong>Su apellido es : </strong>{{$persona->apellido}}</p>
<p><strong>Email: </strong>{{$persona->email}}</p>
<p><strong>Su direccion es: </strong>{{$persona->direccion}}</p>

<form action="{{route('personas.destroy', $persona)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

@endsection
