@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Crear Nueva Pregunta </h2>
    <div class="row mt-2">
        <form id="form_respuesta">
            @csrf
            <div class="row mt-4">
                <div class="col-md-4">
                    <label class="form-label">Texto:</label>
                    <input type="text" class="form-control" name="texto" id="texto">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Es la correcta</label>
                    <select class="form-control" name="correcta" id="correcta">
                        <option value="0">No</option>
                        <option value="1">Si</option>
                        
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Corresponde a la pregunta</label>
                    <select class="form-control" name="id_pregunta" id="id_pregunta">
                        @foreach ($preguntas as $p)
                            <option value="{{ $p->id }}">{{ $p->id }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row mt-2 d-flex justify-content-end">
                <div class="col-md-3">
                    <button class="btn btn-info" style="margin-top: 10pt;" onclick="NewAns()">Agregar Respuesta</button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('js')
    <script src="{{ asset('js/respuestas.js') }}"></script>
@endpush
