@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Preguntas </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row d-flex justify-content-end">

        </div>
        <div class="row d-flex justify-content-center">
            <table id="AllQuestions"  style="width: 100%;">
                <thead>
                    <th>ID</th>
                    <th>Enunciodo</th>
                    <th width="">Foto</th>
                    <th width="">Fecha Registro</th>
                    {{-- <th width="">Acciones</th> --}}
                </thead>
                <tbody></tbody>
            </table>
        </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info w-100"
                        onclick="window.location.href = route('preguntas.create');">Crear solicitud</button>
                </div>
            </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/preguntas.js') }}"></script>
@endpush
