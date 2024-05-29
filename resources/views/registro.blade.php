@extends('base')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('body')
    <div class="row" id="pseudobody1">
        <div class="container" style="background-color: white;  margin-top: 147px;">

            <div class="row" style="width: 100%">
                <form id="NewUser" onsubmit="Registarse()"
                    style="display: flex; flex-direction: column; align-items: center; justify-content: center;"> @csrf
                    <h1
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; font-size: 27px; margin: 10px; top: 0;">
                        Registro para examen de manejo
                    </h1>
                    <input
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;"
                        type="text" name="nombres" id="nombres" placeholder="Nombre(s)">
                    <input
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;"
                        type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
                    <input
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;"
                        type="text" name="matricula" id="matricula" placeholder="Matricula">
                    <input
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;"
                        type="text" name="email" id="email" placeholder="Correo Electrónico">
                    <input
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;"
                        type="password" name="password" id="password" placeholder="Contraseña">
                    <input type="text" name="tipo_usuario" id="tipo_usuario" value="0" style="display: none;">
                    <button type="submit" class="btn btn-blue text-center">REGISTRARME</button>
                </form>

            </div>
        </div>
    </div>

    <div class="row" id="pseudobody2">
        <div class="col text-center mt-4">
        </div>
        <div class="col text-center mt-4">
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endpush
