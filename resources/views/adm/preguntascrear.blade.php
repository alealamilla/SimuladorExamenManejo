@extends('index')


<head>
    <link rel="stylesheet" href={{ asset('css/index/index.css') }}>
</head>

<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Crear Nueva Pregunta </h2>
    <div class="row mt-2">
        <form id="form_pregunta">
            @csrf
            <div class="row mt-4">
                <div class="col-md-6">
                    <label class="form-label">Enunciado:</label>
                    <input type="text" class="form-control" name="enunciado" id="enunciado">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="foto">Foto:</label>
                    <div class="row" style="justify-content: center;">
                        <input type="file" name="foto" id="foto">
                        <label class="custom-file-input" for="foto" style="align-items: center;">
                            <span class="custom-file-label">Adjuntar</span>
                        </label>
                    </div>
                    <div class="row" style="justify-content: center; margin-top: 10%;">
                        <img src="{{ asset('img/icono_imagenRecurso 21@4x.png') }}" alt="img"
                            style="width: 250px; height: auto; " id="evidencia">
                    </div>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-end">
                <div class="col-md-3">
                    <button class="btn btn-info" style="margin-top: 10pt;" onclick="NewQuestion()">Agregar
                        Pregunta</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/preguntas.js') }}"></script>
@endpush
