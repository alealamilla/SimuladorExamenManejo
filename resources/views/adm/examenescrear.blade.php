@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Nuevo Examen </h2>
        <div class="row mt-2">
            <form id="form_examen">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Maximo de Intentos</label>
                        <input type="number" class="form-control" name="intentos" id="intentos">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Cantidad de preguntas:</label>
                        <input type="number" class="form-control" name="num_preguntas" id="num_preguntas">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Ponderación (valor por pregunta):</label>
                        <input type="number" class="form-control" name="ponderación" id="ponderación" >
                    </div>
                </div>
                <div class="row mt-2 d-flex justify-content-end">
                    <div class="col-md-3">
                        <button class="btn btn-info" style="margin-top: 10pt;" onclick="NewExam()">Añadir Examen</button>
                    </div>
                </div>
            </form>
        </div>
</div>

@push('js')
    <script src="{{ asset('js/examenes.js') }}"></script>
@endpush
