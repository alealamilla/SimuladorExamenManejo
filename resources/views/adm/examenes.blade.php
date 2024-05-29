@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Examenes </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row d-flex justify-content-end">

        </div>
        <div class="row d-flex justify-content-center">
            <table id="AllExams"  style="width: 100%;">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th width="">Maximo de Intentos</th>
                    <th width="">Cantidad Preguntas</th>
                    <th width="">Ponderación</th>
                    <th width="">Fecha Registro</th>
                    {{-- <th width="">Acciones</th> --}}
                </thead>
                <tbody></tbody>
            </table>
        </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info w-100"
                        onclick="window.location.href = route('examenes.create');">Añadir Examen</button>
                </div>
            </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/examenes.js') }}"></script>
@endpush
