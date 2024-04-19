<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersona;
use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index(){      
        $personas=persona::orderBy("id","desc")->paginate();
        
        return view('personas.index',compact('personas'));   
    }
    public function create(){       
        return view('personas.create');
    }
    public function store(StorePersona $request){

    

        $persona=new persona();
        $persona->nombre=$request->nombre;
        $persona->apellido=$request->apellido;
        $persona->email=$request->email;
        $persona->direccion=$request->direccion;

        $persona->save();
        return redirect()->route('personas.show',$persona);

    }
    public function show(persona $persona){    
        

        return view('personas.show',compact('persona'));
    }
    public function edit(persona $persona)
{
    // ...
    return view('personas.edit', compact('persona'));
}
public function update(Request $request ,persona $persona){

    $request->validate([

        'nombre'=>'required',
        'apellido'=>'required',
        'email'=>'required',
        'direccion'=>'required'
    ]);
    
    $persona->nombre=$request->nombre;
    $persona->apellido=$request->apellido;
    $persona->email=$request->email;
    $persona->direccion=$request->direccion;

    $persona->save();
    return redirect()->route('personas.show',$persona);       
  
}

public function destroy( persona $persona){

    $persona->delete();
    return redirect()->route('personas.index');

}

}
