@extends('index')


<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Administración </h2>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row justify-content-center" style="text-align: center;">
            <div class="col text-center">
                <a href="{{ route('usuarios.index') }}">
                    <div>
                        <i class="fa-solid fa-users-rays fa-bounce fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Usuarios</h3>
            </div>
            <div class="col text-center">
                <a href="{{ route('examenes.index') }}">
                    <div>
                        <i class="fa-solid fa-file-signature fa-beat-fade fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Examenes</h3>
            </div>
            <div class="col text-center">
                <a href="{{ route('preguntas.look') }}">
                    <div>
                        <i class="fa-solid fa-clipboard-question fa-shake fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Preguntas</h3>
            </div>
            <div class="col text-center">
                <a href="{{ route('respuestas.index') }}">
                    <div>
                        <i class="fa-solid fa-file-circle-exclamation fa-beat fa-4x" style="color: #74C0FC;"></i>
                    </div>
                </a><br>
                <h3 style="color:black;">Respuestas</h3>
            </div>
        </div>
    </div>
