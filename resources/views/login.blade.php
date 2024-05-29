@extends('base')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('body')
    <div class="row" id="pseudobody1">
        <div class="container" style="background-color: white;  margin-top: 147px;">
            <meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token">
            <div class="row" style="width: 100%">
                <form id="login" onsubmit="submitLogin(this, event)" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    @csrf
                    <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; font-size: 27px; margin: 10px; top: 0;">
                        Bienvenido
                    </h1>
                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;" type="text" name="email" id="email" placeholder="Correo Electronico">
                    <input style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #0b2347; border: 2px solid #4798e9; border-radius: 10px; padding: 10px; margin-bottom: 10px; width: 70%;" type="password" name="password" id="password" placeholder="Contraseña">
                    <button type="submit" class="btn btn-blue text-center">INICIAR SESIÓN</button>
                </form>

            </div>
        </div>
    </div>

    <div class="row" id="pseudobody2">
        <div class="col text-center mt-4">
            <a href="{{ route('registro') }}">
                <p class="text"
                    style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #000000; font-size: 22px">
                    Registrarse</p>
            </a>
        </div>
        <div class="col text-center mt-4">
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/log.js') }}"></script>
@endpush