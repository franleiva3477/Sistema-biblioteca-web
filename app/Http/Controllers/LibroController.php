<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreLibro;
use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){      
        $libros=libro::orderBy("id","desc")->paginate();
        
        return view('libros.index',compact('libros'));   
    }
    public function create(){       
        return view('libros.create');
    }
    public function store(StoreLibro $request){

        

        $libro=new libro();
        $libro->titulo=$request->titulo;
        $libro->autor=$request->autor;
        $libro->editorial=$request->editorial;
        $libro->contenido=$request->contenido;

        $libro->save();
        return redirect()->route('libros.show',$libro);

    }
    public function show(libro $libro){    
        

        return view('libros.show',compact('libro'));
    }
    public function edit(libro $libro)
{
    // ...
    return view('libros.edit', compact('libro'));
}
public function update(Request $request ,libro $libro){
    $request->validate([

        'titulo'=>'required',
        'autor'=>'required',
        'editorial'=>'required',
        'contenido'=>'required'
    ]);
   
    
    $libro->titulo=$request->titulo;
    $libro->autor=$request->autor;
    $libro->editorial=$request->editorial;
    $libro->contenido=$request->contenido;

    $libro->save();
    return redirect()->route('libros.show',$libro);       
  
}
public function destroy( libro $libro){

    $libro->delete();
    return redirect()->route('libros.index');

}

}
