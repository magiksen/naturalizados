<?php

namespace App\Http\Controllers;

use App\Models\Naturalizado;
use Illuminate\Http\Request;

class NaturalizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naturalizados = Naturalizado::all();
        
        return view('admin.index', compact('naturalizados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_uno' => 'required',
            'apellido_uno' => 'required',
            'ci_extranjero' => 'required',
            'num_gaceta' => 'required',
            'fecha_publicacion' => 'required',
            'num_pagina' => 'required',
            'num_linea' => 'required',
            'expediente' => 'required',
        ]);

        $naturalizado = new Naturalizado;

        $naturalizado->nombre_uno = $request->nombre_uno;
        $naturalizado->nombre_dos = $request->nombre_dos;
        $naturalizado->nombre_tres = $request->nombre_tres;
        $naturalizado->apellido_uno = $request->apellido_uno;
        $naturalizado->apellido_dos = $request->apellido_dos;
        $naturalizado->apellido_tres = $request->apellido_tres;
        $naturalizado->apellido_casada = $request->apellido_casada;
        $naturalizado->ci_extranjero = $request->ci_extranjero;
        $naturalizado->num_gaceta = $request->num_gaceta;
        $naturalizado->fecha_publicacion = $request->fecha_publicacion;
        $naturalizado->num_pagina = $request->num_pagina;
        $naturalizado->num_linea = $request->num_linea;
        $naturalizado->expediente = $request->expediente;
        $naturalizado->error_gaceta = $request->error_gaceta;
        $naturalizado->observacion = $request->observacion;

        $naturalizado->save();

        return redirect()->route('naturalizados.index', $naturalizado)->with('info', 'El usuario se reistro con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Naturalizado  $naturalizado
     * @return \Illuminate\Http\Response
     */
    public function show(Naturalizado $naturalizado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Naturalizado  $naturalizado
     * @return \Illuminate\Http\Response
     */
    public function edit(Naturalizado $naturalizado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Naturalizado  $naturalizado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Naturalizado $naturalizado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Naturalizado  $naturalizado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Naturalizado $naturalizado)
    {
        //
    }
}
