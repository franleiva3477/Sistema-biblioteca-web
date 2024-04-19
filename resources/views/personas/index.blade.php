@extends('layouts.plantilla')

@section('title','personas')


@section('content') 


    <br>
    <h1>Listado de personas</h1>
    <br>
<a href="{{route("personas.create")}}">Añadir personas</a>
<ul><br>
    @foreach ($personas as $persona)
        <li>
            <a href="{{route('personas.show',$persona->id)}}">-{{$persona->nombre}}</a>
        </li>
    @endforeach

</ul>
{{$personas->links()}}

@endsection
 