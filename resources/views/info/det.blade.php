@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Resumen del Examen </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <input type="hidden" id="IDUser"
            value="@if (session()->has('user')) {{ session('user')->id }}@else No user data found in session. @endif">

            <div class="row d-flex justify-content-center">
                @foreach ($datos as $dato)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pregunta {{ $dato->pregunta->id }}</h5>
                                <p class="card-text">{{ $dato->pregunta->enunciado }}</p>
                                <p class="card-text">Respuesta: {{ $dato->respuesta->texto }}</p>
                                <p class="card-text">
                                    @if ($dato->correcta == 1)
                                        Correcta
                                    @else
                                        Incorrecta
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@push('js')
@endpush
