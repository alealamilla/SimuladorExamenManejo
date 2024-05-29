<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Preguntas::all();
            return response()->json($data);
        } else {
            return view("adm.preguntas");
        }
    }
    public function look(Request $request)
    {
        if ($request->ajax()) {
            $data = Preguntas::all();
            return response()->json($data);
        } else {
            return view("adm.preguntas");
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adm.preguntascrear");
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
        $file = $request->file('foto');

        if (isset($data['update'])) {

            unset($data['update']);

            return $this->update($request, $data['id']);
        } else {

            $resp = Preguntas::create($data);
            return response()->json($resp);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(Preguntas $preguntas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Preguntas $preguntas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntas $preguntas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preguntas $preguntas)
    {
        //
    }
}
