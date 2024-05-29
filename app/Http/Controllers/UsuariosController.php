<?php

namespace App\Http\Controllers;

use App\Models\Intentos;
use App\Models\Usuario;
use App\Models\Usuarios;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Usuarios::all();

            return response()->json($data);
        } else {
            return view("adm.usuarios");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adm.usuarioscrear");
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
            
            $empleado = new Usuarios();
            $empleado->nombres = $request->nombres;
            $empleado->apellidos = $request->apellidos;
            $empleado->email = $request->email;
            $empleado->matricula = $request->matricula;
            $empleado->tipo_usuario = $request->tipo_usuario;
            $empleado->password = Hash::make($request->password);
            $empleado->save();

            Intentos::create([
                'id_usuario' => $empleado->id,
                'id_examen' => 1,
                'conteo_intentos' => 0
            ]);
            
            Intentos::create([
                'id_usuario' => $empleado->id,
                'id_examen' => 2,
                'conteo_intentos' => 0
            ]);
            return response()->json($empleado);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarios $usuarios)
    {
        //
    }

    public function check(string $email)
    {
        $usuario = Usuarios::where("email", $email)->first();
        if ($usuario) {
            FacadesSession::put('user', $usuario);

        // Redirect the user to the home view
        return redirect()->route('home');
        } else {
            
        }
       
    }
}
