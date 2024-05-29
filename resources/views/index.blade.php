@extends('base')

@section('body')
<head> <link rel="stylesheet" href={{ asset('css/index/index.css')}}> </head>

<div class="stripe">
    <div class="menu" >
        <ul class="nav" >
            <li>
                <a href="{{ route('home') }}"><i class="inicio"></i> Inicio</a>
            </li>
            <li>
                <span class="d-flex justify-contend-center align-items-center h-100"style="color: #d8d8d8">|</span>
            </li>
            <li>
                <a href="{{ route('myinfo') }}"><i class="inicio"></i> My Info</a>
            </li>
            <li>
                <span class="d-flex justify-contend-center align-items-center h-100" style="color: #d8d8d8">|</span>
            </li>
            <li>
                <a href="{{ route('prueba.inicio') }}"><i class="inicio"></i> Examen Prueba</a>
            </li>
            <li>
                <span class="d-flex justify-contend-center align-items-center h-100" style="color: #d8d8d8">|</span>
            </li>
            <li>
                <a href="{{ route('final.inicio') }}"><i class="inicio"></i> Examen Final</a>
            </li>
            <li>
                <span class="d-flex justify-contend-center align-items-center h-100" style="color: #d8d8d8">|</span>
            </li>
            @if (session()->has('user'))
                @php
                    $user = session('user');
                @endphp

                @if ($user->tipo_usuario == 1)
                <li>
                    <a href="{{ route('administrar') }}"><i class="inicio"></i> Administrar</a>
                </li>
                <li>
                    <span class="d-flex justify-contend-center align-items-center h-100" style="color: #d8d8d8">|</span>
                </li>
                @endif
            @else
                No user data found in session.
            @endif

            <li>
                <a href="{{ route('login.view') }}"><i class="inicio"></i> Salir</a>
            </li>
            
        </ul>
    </div>

</div>


@endsection
         