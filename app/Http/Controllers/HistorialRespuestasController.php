<?php

namespace App\Http\Controllers;

use App\Models\HistorialRespuestas;
use Illuminate\Http\Request;

class HistorialRespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistorialRespuestas  $historialRespuestas
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $datos = HistorialRespuestas::with("pregunta", "respuesta")->where("id_his_examen", $id)->get();

        return view("info.det", compact("datos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorialRespuestas  $historialRespuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(HistorialRespuestas $historialRespuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistorialRespuestas  $historialRespuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialRespuestas $historialRespuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialRespuestas  $historialRespuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialRespuestas $historialRespuestas)
    {
        //
    }
}
