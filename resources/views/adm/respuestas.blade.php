@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Respuestas </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row d-flex justify-content-end">

        </div>
        <div class="row d-flex justify-content-center">
            <table id="AllAnswers"  style="width: 100%;">
                <thead>
                    <th>ID</th>
                    <th>Texto</th>
                    <th width="">Es correcta</th>
                    <th>Pregunta</th>
                    <th width="">Fecha Registro</th>
                    {{-- <th width="">Acciones</th> --}}
                </thead>
                <tbody></tbody>
            </table>
        </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-info w-100"
                        onclick="window.location.href = route('respuestas.create');">Agregar Respuestas</button>
                </div>
            </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/respuestas.js') }}"></script>
@endpush
