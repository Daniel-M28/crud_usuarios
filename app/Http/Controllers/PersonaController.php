<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $datos['personas']= persona:: paginate(5);

        return view ('persona.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $campos=
        [ 'nombre'=>'required|string|max:100',
        'CorreoElectronico'=>'required|email',
        'telefono'=>'required|string|max:100',
        'Direccion'=>'required|string|max:100'];

        $mensaje=['required'=>'El :attribute es requerido',
        'Direccion.required' => 'La Direccion es requerida'
    ];

    $this->validate($request, $campos, $mensaje);
        


        $datosPersona = request()->except('_token');
        Persona::insert($datosPersona);

        return redirect('persona')->with('mensaje','persona agregada con éxito' );   
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $persona= Persona::findOrFail($id);
        return view ('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    { 
        //
        
        $campos=
        ['nombre'=>'required|string|max:100',
        'CorreoElectronico'=>'required|email',
        'telefono'=>'required|string|max:100',
        'Direccion'=>'required|string|max:100'];

        $mensaje=['required'=>'El :attribute es requerido',
        'Direccion.required' => 'La Direccion es requerida'
    ];

    $this->validate($request, $campos, $mensaje);
        
        $datosPersona = request()->except(['_token','_method']);
          Persona::where('id','=',$id)->update($datosPersona);

          $persona= Persona::findOrFail($id);
      
        return view ('persona.edit', compact('persona'));
        
       
    }
    

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('persona')->with('mensaje','persona borrada');}
    

}