@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Intentos de Examen Final </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <input type="hidden" id="IDUser" value="@if (session()->has('user')){{ session('user')->id }}@else No user data found in session. @endif">

        <div class="row d-flex justify-content-center">
            <table id="finales" style="width: 100%;">
                <thead>
                    <th width="">Calificación</th>
                    <th width="">Aprobatorio</th>
                    <th width="">Realizado</th>
                    <th width="">Detalle</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/data.js') }}"></script>
@endpush
