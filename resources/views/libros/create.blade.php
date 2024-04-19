@extends('layouts.plantilla')

@section('title','libros create')
@section('content')

<center><h1>Aqui podras añadir Libros nuevos</h1></center><br>
<a href="{{route("libros.index")}}">Volver a Libros</a>
<br>
<form action="{{route('libros.store')}}" method="POST">
    @csrf
    <label><br>
        Titulo:
        <br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
    </label>

    @error('titulo')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Autor:
        <br>
        <input type="text" name="autor" value="{{old('autor')}}">
    </label>

    <br>

    @error('autor')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Editorial:
        <br>
        <input type="text" name="editorial" value="{{old('editorial')}}">
    </label>

    <br>

    @error('editorial')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Contenido:
        <br>
        <textarea name="contenido" rows="3" >{{old('contenido')}}</textarea>
    </label><br>

    @error('contenido')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>
    <button type="submit">Enviar formulario</button>


</form>


@endsection
