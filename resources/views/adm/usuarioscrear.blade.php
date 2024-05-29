@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Crear Nuevo Usuario </h2>
        <div class="row mt-2">
            <form id="form_usuario">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control" name="nombres" id="nombres">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" id="apellidos">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Correo electrónico:</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" name="password" id="password" >
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Matricula:</label>
                        <input type="text" class="form-control" name="matricula" id="matricula" >
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tipo de usuario</label>
                        <select class="form-control" name="tipo_usuario" id="tipo_usuario">
                                <option value="1">Administrativo</option>
                                <option value="0">Alumno</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2 d-flex justify-content-end">
                    <div class="col-md-3">
                        <button class="btn btn-info" style="margin-top: 10pt;" onclick="NewUser()">Agregar Usuario</button>
                    </div>
                </div>
            </form>
        </div>
</div>

@push('js')
    <script src="{{ asset('js/usuarios.js') }}"></script>
@endpush
