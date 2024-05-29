<?php

namespace App\Http\Controllers;

use App\Models\HistorialExamen;
use Illuminate\Http\Request;

class HistorialExamenController extends Controller
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
     * @param  \App\Models\HistorialExamen  $historialExamen
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $data = HistorialExamen::where("id_usuario", $id)->where("id_examen", 1)->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorialExamen  $historialExamen
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $data = HistorialExamen::where("id_usuario", $id)->where("id_examen", 2)->get();

        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistorialExamen  $historialExamen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistorialExamen $historialExamen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorialExamen  $historialExamen
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorialExamen $historialExamen)
    {
        //
    }
}
