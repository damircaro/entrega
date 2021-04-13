<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Profesional::all();
        return $producto;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $profesionals = new Profesional();
        $profesionals->nrodocumento =$request->nrodocumento;
        $profesionals->nombre =$request->nombre;
        $profesionals->apellido =$request->apellido;
        $profesionals->habilida =$request->habilida;
        $profesionals->salario =$request->salario;        
        $profesionals->disponible='0';
        $profesionals->save();

    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     * 
     * 
     */

 
    
    public function update(Request $request)
    {
        $profesionals =  Profesional::findOrFail($request->id);
        $profesionals->nrodocumento =$request->nrodocumento;
        $profesionals->nombre =$request->nombre;
        $profesionals->apellido =$request->apellido;
        $profesionals->habilida =$request->habilida;
        $profesionals->salario =$request->salario;        
        $profesionals->disponible='1';
        $profesionals->update();
    }

    public function desactivar(Request $request)
    {
        $profesionals =  Profesional::findOrFail($request->id);
        $profesionals->disponible='0';
        $profesionals->update();
    }
    public function activar(Request $request)
    {
        $profesionals =  Profesional::findOrFail($request->id);
        $profesionals->disponible='1';
        $profesionals->update();
    }   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesional  $profesional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesional $profesional)
    {
        //
    }
}
