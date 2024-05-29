<?php

namespace App\Http\Controllers;

use App\Models\Intentos;
use Illuminate\Http\Request;

class IntentosController extends Controller
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
        $data = $request->all();

        if (isset($data['prueba'])) {
            
            return $this->update1($request, $data['id_usuario']);
        } else {
            return $this->update2($request, $data['id_usuario']);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intentos  $intentos
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $try = Intentos::where('id_examen', 1)->where('id_usuario', $id)->first();

        return response()->json($try);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intentos  $intentos
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $try = Intentos::where('id_examen', 2)->where('id_usuario', $id)->first();

        return response()->json($try);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intentos  $intentos
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, int $id)
    {
        $intento = Intentos::where('id_examen', 1)->where('id_usuario', $id)->first();
        $intento ->update($request->all());
        return response()->json($intento );
    }

    public function update2(Request $request, int $id)
    {
        $intento = Intentos::where('id_examen', 2)->where('id_usuario', $id)->first();
        $intento ->update($request->all());
        return response()->json($intento );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intentos  $intentos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intentos $intentos)
    {
        //
    }
}
