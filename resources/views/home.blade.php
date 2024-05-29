@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        @if (session()->has('user'))
            @php
                $user = session('user');
            @endphp
            Bienvenido {{ $user->nombres }} {{ $user->apellidos }}
        @else
            No user data found in session.
        @endif
    </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row justify-content-center" style="text-align: center;">
            <div class="col text-center">
                <a href="{{ route('myinfo') }}">
                    <div>
                        <i class="fa-solid fa-id-card fa-bounce fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">My Info</h3>
                <p> Aqui podras checar tu información y material de estudio</p>
            </div>
            <div class="col text-center">
                <a href="{{ route('prueba.inicio') }}">
                    <div>
                        <i class="fa-solid fa-car-tunnel fa-beat-fade fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Examen Prueba</h3>
                <p> Aqui podras realizar una prueba del examen de manejo</p>
            </div>
            <div class="col text-center">
                <a href="{{ route('final.inicio') }}">
                    <div>
                        <i class="fa-solid fa-car-on fa-shake fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Examen Final</h3>
                <p> Aqui podras realizar el examen final de manejo</p>
            </div>
            @if (session()->has('user'))
                @php
                    $user = session('user');
                @endphp

                @if ($user->tipo_usuario == 1)
                    <div class="col text-center">
                        <a href="{{ route('administrar') }}">
                            <div>
                                <i class="fa-solid fa-gear fa-spin-pulse fa-4x" style="color: #74C0FC;"></i>
                            </div>
                        </a><br>
                        <h3 style="color:black;">Administrar</h3>
                        <p> Aqui podrás consultar las administraciones del sistema</p>
                    </div>
                @endif
            @else
                No user data found in session.
            @endif
        </div>
        @php
            $userId =  session('user')->id;
        @endphp
        <input type="hidden" id="userId" value="{{ $userId }}">

        {{-- <img src="{{ asset('preguntas/P82.jpg') }}" alt="Question Image" > --}}
    </div>

    @push('js')
        <script>
            let userId = document.getElementById('userId').value;

            // Check if the user ID exists
            if (userId) {
                // User ID exists, you can use it here
                console.log('User ID:', userId);
            } else {
                // User ID does not exist or is empty
                console.log('User ID not found');
            }
        </script>
    @endpush
