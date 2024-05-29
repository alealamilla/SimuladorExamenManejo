<?php

use App\Http\Controllers\ExamenesController;
use App\Http\Controllers\HistorialExamenController;
use App\Http\Controllers\HistorialRespuestasController;
use App\Http\Controllers\IntentosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PreguntasController;
use App\Http\Controllers\RespuestasController;
use App\Http\Controllers\UsuariosController;
use App\Models\HistorialExamen;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login.view');

Route::get('/preguntas/ver', [PreguntasController::class, 'look'])->name('preguntas.look');
//RUTA PARA AUTENTICACION DE USUARIOS
Route::post("/auth-login", [LoginController::class, "login"])->name("entrar");
// HOME
Route::get("/home", function () {
    return view("home");
})->name("home");

 //REGISTROS
 Route::get('/registrarme', function() { 
    return view('registro');
})->name('registro');
//MenuItems
Route::get("/administrar", function () {
    return view("adm.menu");
})->name("administrar");

Route::get("/myinfo", function () {
    return view("info.data");
})->name("myinfo");

Route::get("/myinfo/prueba", function () {
    return view("info.prueba");
})->name("historialprueba");

Route::get("/myinfo/final", function () {
    return view("info.final");
})->name("historialfinal");

//Rutas Examen Prueba
Route::get("/examen/prueba", function () {
    return view("prueba.inicio");
})->name("prueba.inicio");

Route::get("/examen/prueba/preguntas",
    [ExamenesController::class, "startPrueba"]
)->name("prueba.preguntas");

Route::post("/examen/prueba/respuestas/subir",
    [ExamenesController::class, "submitPrueba"]
)->name("prueba.submit");

Route::get("/examen/prueba/finalizar",
    [ExamenesController::class, "finishPrueba"]
)->name("prueba.resultado");


//Rutas Examen Final
Route::get("/examen/final", function () {
    return view("final.inicio");
})->name("final.inicio");

Route::get("/examen/final/preguntas",
    [ExamenesController::class, "startFinal"]
)->name("final.preguntas");

Route::post("/examen/final/respuestas/subir",
    [ExamenesController::class, "submitFinal"]
)->name("final.submit");

Route::get("/examen/final/finalizar",
    [ExamenesController::class, "finishFinal"]
)->name("final.resultado");

Route::resources([
    "/usuarios" => UsuariosController::class,
    "/examenes" => ExamenesController::class,
    "/preguntas" => PreguntasController::class,
    "/respuestas" => RespuestasController::class,
    "/intentos" => IntentosController::class,
    "/historialexamen" => HistorialExamenController::class,
    "/historialresp" => HistorialRespuestasController::class,

]);

Route::get('/download-guia', function () {
    $filePath = public_path('guide.pdf');

    return response()->file($filePath);
});

Route::get("home/{email}", [UsuariosController::class, "check"])->name("checkmail");

