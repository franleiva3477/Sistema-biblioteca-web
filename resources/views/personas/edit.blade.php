@extends('layouts.plantilla')

@section('title','personas edit')
@section('content')

<h1>Editar personas</h1>
<a href="{{route("personas.index")}}">Volver a personas</a>

<form action="{{route('personas.update',$persona)}}" method="POST">
    @csrf
    @method('put')


    <label>
        Nombre:
        <br>        
        <input type="text" name="nombre"  value="{{old('nombre',$persona->nombre)}}">
    </label>
    <br>
    @error('nombre')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror

    <label>
        Apellido:
        <br>
        <input type="text" name="apellido" value="{{old('apellido',$persona->apellido)}}">
    </label>
    <br>
    @error('apellido')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror

    <label>
        Email:
        <br>
        <input type="text" name="email" value="{{old('email',$persona->email)}}">
    </label>
    <br>
    @error('email')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <label>
        Direccion:
        <br>
        <textarea name="direccion" rows="2" >
{{old('direccion',$persona->direccion)}}
        </textarea>
    </label><br>
    @error('direccion')
    <br>
    <span> *{{$message}}</span>
        <br>
    @enderror
    <br>
    <button type="submit">Actualizar persona</button>


</form>


@endsection
