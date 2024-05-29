@extends('index')

<div class="container-fluid ">
    <h2 style="text-align: center; color: black; margin-top: 10rem;">
        Examen de Prueba
    </h2>
    <input type="hidden" id="IDUser"
        value="@if (session()->has('user')) {{ session('user')->id }}@else No user data found in session. @endif">

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row justify-content-center" id="question-container">
            <!-- Question and answers will be dynamically inserted here by JavaScript -->
        </div>
        <div id="timer">Tiempo Restante: <span id="timer-count">60</span> segundos</div>
        <button id="next-question-btn" class="btn btn-primary" onclick="goToNextQuestion()">Next Question</button>
    </div>
    <form id="token">
        @csrf 
     </form>

</div>
@php
$userId =  session('historial_examen_id');
@endphp
<input type="hidden" id="userId" value="{{ $userId }}"

@push('js')
    <script>
        const questions = @json($questions);
        let currentQuestionIndex = 0;
        let timer;
        var imageBasePath = "{{ asset('/') }}";
    </script>

    <script src="{{ asset('js/prueba/question.js') }}"></script>
@endpush
