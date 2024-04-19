@extends('layouts.plantilla')

@section('title','personas create')
@section('content')
<h1>EN ESTA SECCION PODRAS AÑADIR PERSONAS NUEVAS</h1> <br>
<a href="{{route("personas.index")}}">Volver a personas</a><br>

<form action="{{route('personas.store')}}" method="POST">
    @csrf
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
    </label>

    @error('nombre')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Apellido:
        <br>
        <input type="text" name="apellido" value="{{old('apellido')}}">
    </label>

    <br>

    @error('apellido')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Email:
        <br>
        <input type="text" name="email" value="{{old('email')}}">
    </label>

    <br>

    @error('email')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>

    <label>
        Direccion:
        <br>
        <textarea name="direccion" rows="2" >{{old('direccion')}}</textarea>
    </label><br>

    @error('direccion')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>
    <button type="submit">Enviar formulario</button>


</form>


@endsection
