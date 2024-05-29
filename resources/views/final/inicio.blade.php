@extends('index')

<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Examen Final
    </h2>
    <input type="hidden" id="IDUser" value="@if (session()->has('user')){{ session('user')->id }}@else No user data found in session. @endif">

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row justify-content-center">
            <div class="col-12" style="text-align: center">
                <h3 id="Intentos">LLevas un total de #</h3>
            </div>

        </div>
        <div class="row justify-content-center" style="text-align: center;"> 
            <form id="token">
               @csrf 
            </form>
            
            <input type="number" name="conteo_intentos" id="conteo_intentos" style="display: none">
            <button id="btnNewPrueba" class="btn btn-info" style="margin-top: 10pt; width: 30%" onclick="NewExam()">Empezar Examen Final
                </button>

        </div>
    </div>

</div>

@push('js')

    <script src="{{ asset('js/final/inicio.js') }}"></script>
@endpush
