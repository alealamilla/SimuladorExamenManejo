@extends('index')


<div class="container-fluid" style="margin-top: 7rem;">
    <div class="row justify-content-center" style="text-align: center;">
        <div class="col-12">
            <h1>Resultados del examen de prueba</h1>
            <p>Calificación Final: {{ $totalScore }}% de aciertos</p>
            <p>Aprobado: {{ $isPassed ? 'Si' : 'No, sigue estudiando' }}</p>
        </div>
    </div>
    <div class="row justify-content-center" style="text-align: center;">
        <a href="{{ route('prueba.inicio') }}">
            <div>
                <i class="fa-solid fa-repeat fa-flip fa-4x" style="color: #74C0FC;"></i>
            </div>
        </a>
    </div>
</div>
