@extends('index')

<div class="container-fluid ">

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row justify-content-center">
            <div class="col-6" style="text-align: right">
                <i class="fa-regular fa-id-card fa-5x"></i>
            </div>
            <div class="col-6" style="text-align: left">
                <p>
                    @if (session()->has('user'))
                        @php
                            $user = session('user');
                        @endphp
                        Nombre: {{ $user->nombres }} {{ $user->apellidos }}
                    @else
                        No user data found in session.
                    @endif
                </p>
                <p>
                    @if (session()->has('user'))
                        @php
                            $user = session('user');
                        @endphp
                        email: {{ $user->email }} Matricula: {{ $user->matricula }}
                    @else
                        No user data found in session.
                    @endif
                </p>
            </div>
        </div>
        <div class="row justify-content-center" style="text-align: center;">
             <a href="{{ route('historialprueba') }}"> <p>Intentos Examen de Prueba</p></a>
            <a href="{{ route('historialfinal') }}"> <p>Intentos Examen Final</p></a>
        </div>
        <div class="row" style="text-align: left">
            <a href="{{ url('/download-guia') }}" target="_blank">
                <i class="fa-solid fa-book-bookmark fa-bounce fa-2xl" style="color: #B197FC;"></i>
            </a>
        </div>
    </div>

</div>
