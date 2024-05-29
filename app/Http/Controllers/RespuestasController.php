<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Respuestas::all();

            return response()->json($data);
        } else {
            return view("adm.respuestas");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntas = Preguntas::orderBy('id', 'desc')->get();
        return view("adm.respuestascrear", compact("preguntas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

       
        if (isset($data['update'])) {
            
            unset($data['update']);
           
            return $this->update($request, $data['id']);
        } else {
            
            $resp = Respuestas::create($data);
            return response()->json($resp);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function show(Respuestas $respuestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuestas $respuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuestas $respuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuestas $respuestas)
    {
        //
    }
}
