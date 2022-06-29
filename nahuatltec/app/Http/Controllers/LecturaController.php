<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lectura;

class LecturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturas = Lectura::all();
        return $lecturas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lectura = new Lectura();
        $lectura->codigo = $request->codigo;
        $lectura->titulo = $request->titulo;
        $lectura->descripcion = $request->descripcion;
        $lectura->foto = $request->foto;
        
        $lectura->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $lectura = Lectura::findOrFail($request->id);
        $lectura->codigo = $request->codigo;
        $lectura->titulo = $request->titulo;
        $lectura->descripcion = $request->descripcion;
        $lectura->foto = $request->foto;

        $lectura->save();

        return $lectura;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $lectura = Lectura::destroy($request->id);
        return $lectura;
    }
}
