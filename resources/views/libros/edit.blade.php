@extends('layouts.plantilla')

@section('title','libros edit')
@section('content')

<h1>EN ESTA SECCION PODRAS EDITAR LIBROS</h1> <br>
<a href="{{route("libros.index")}}">Volver a libros</a>

<form action="{{route('libros.update',$libro)}}" method="POST">
    @csrf
    @method('put')

<br>
    <label>
        Titulo:
        <br>        
        <input type="text" name="titulo"  value="{{old('titulo',$libro->titulo)}}">
    </label>
    <br>
    @error('titulo')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror

    <label>
        Autor:
        <br>
        <input type="text" name="autor" value="{{old('autor',$libro->autor)}}">
    </label>
    <br>
    @error('autor')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror

    <label>
        Editorial:
        <br>
        <input type="text" name="editorial" value="{{old('editorial',$libro->editorial)}}">
    </label>
    <br>
    @error('editorial')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <label>
        Contenido:
        <br>
        <textarea name="contenido" rows="3" >
{{old('contenido',$libro->contenido)}}
        </textarea>
    </label><br>
    @error('contenido')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <button type="submit">Actualizar libro</button>


</form>


@endsection
