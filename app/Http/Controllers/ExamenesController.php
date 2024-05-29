<?php

namespace App\Http\Controllers;

use App\Models\Examenes;
use App\Models\HistorialExamen;
use App\Models\HistorialRespuestas;
use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exact;

class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Examenes::all();

            return response()->json($data);
        } else {
            return view("adm.examenes");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("adm.examenescrear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();


        if (isset($data['update'])) {

            unset($data['update']);

            return $this->update($request, $data['id']);
        } else {

            $resp = Examenes::create($data);
            return response()->json($resp);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function show(Examenes $examenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function edit(Examenes $examenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examenes $examenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Examenes  $examenes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examenes $examenes)
    {
        //
    }

    public function startPrueba(Request $request)
    {
        $questions = Preguntas::with('opciones')->inRandomOrder()->limit(20)->get();

        $userId = session('user')->id;

        $historialExamen = HistorialExamen::create([
            'id_usuario' => $userId,
            'id_examen' => 1,
            'preguntas_asignadas' => $questions->pluck('id')->implode(','),
            'calificacion' => null,
            'aprobado' => null,
        ]);

        session(['historial_examen_id' => $historialExamen->id]);

        return view('prueba.question', compact('questions'));
    }

    public function submitPrueba(Request $request)
    {
        $validatedData = $request->validate([
            'questionId' => 'required',
            'answerId' => 'nullable', // Allow null values for the answer
        ]);

        $answerId = $validatedData['answerId'];

        // If $answerId is not null, proceed to create the historial_respuesta entry
        if ($answerId !== null) {
            $respuesta = Respuestas::find($answerId);
            $isCorrect = $respuesta ? $respuesta->correcta : 0;

            // Get the historial_examen ID from the session
            $historialExamenId = session('historial_examen_id');

            // Create a new historial_respuesta entry
            HistorialRespuestas::create([
                'id_his_examen' => $historialExamenId,
                'id_pregunta' => $validatedData['questionId'],
                'id_respuesta' => $answerId,
                'correcta' => $isCorrect,
            ]);
        }

        return response()->json(['success' => true]);
    }


    public function finishPrueba()
    {
        // Step 1: Retrieve all records from historial_respuestas for the current exam
        $historialExamenId = session('historial_examen_id');
        $historialRespuestas = HistorialRespuestas::where('id_his_examen', $historialExamenId)->get();

        // Step 2: Calculate the total score and percentage score
        $totalQuestions = 20; // Set total number of questions to 20
        $correctAnswers = $historialRespuestas->where('correcta', true)->count();
        $totalScore = $correctAnswers * 5;
        $percentageScore = ($correctAnswers / $totalQuestions) * 100;

        // Step 3: Determine if the exam is passed
        $isPassed = $percentageScore >= 75;

        // Step 4: Update HistorialExamen with totalScore and isPassed
        $historialExamen = HistorialExamen::findOrFail($historialExamenId);
        $historialExamen->calificacion = $totalScore;
        $historialExamen->aprobado = $isPassed ? 1 : 0; // If $isPassed is true, set aprobado to 1, otherwise set it to 0
        $historialExamen->save();

        // Step 5: Pass relevant data to the view
        return view('prueba.fin', [
            'totalScore' => $totalScore,
            'percentageScore' => $percentageScore,
            'isPassed' => $isPassed,
        ])->with('historialExamenId', $historialExamenId);
    }

    public function startFinal(Request $request)
    {
        $questions = Preguntas::with('opciones')->inRandomOrder()->limit(40)->get();

        $userId = session('user')->id;

        $historialExamen = HistorialExamen::create([
            'id_usuario' => $userId,
            'id_examen' => 2,
            'preguntas_asignadas' => $questions->pluck('id')->implode(','),
            'calificacion' => null,
            'aprobado' => null,
        ]);

        session(['historial_examen_id' => $historialExamen->id]);

        return view('final.question', compact('questions'));
    }

    public function submitFinal(Request $request)
    {
        $validatedData = $request->validate([
            'questionId' => 'required',
            'answerId' => 'nullable', // Allow null values for the answer
        ]);

        $answerId = $validatedData['answerId'];

        // If $answerId is not null, proceed to create the historial_respuesta entry
        if ($answerId !== null) {
            $respuesta = Respuestas::find($answerId);
            $isCorrect = $respuesta ? $respuesta->correcta : 0;

            // Get the historial_examen ID from the session
            $historialExamenId = session('historial_examen_id');

            // Create a new historial_respuesta entry
            HistorialRespuestas::create([
                'id_his_examen' => $historialExamenId,
                'id_pregunta' => $validatedData['questionId'],
                'id_respuesta' => $answerId,
                'correcta' => $isCorrect,
            ]);
        }

        return response()->json(['success' => true]);
    }

    public function finishFinal()
    {
        // Step 1: Retrieve all records from historial_respuestas for the current exam
        $historialExamenId = session('historial_examen_id');
        $historialRespuestas = HistorialRespuestas::where('id_his_examen', $historialExamenId)->get();

        // Step 2: Calculate the total score and percentage score
        $totalQuestions = 40; // Set total number of questions to 20
        $correctAnswers = $historialRespuestas->where('correcta', true)->count();
        $totalScore = $correctAnswers * 2.5;
        $percentageScore = ($correctAnswers / $totalQuestions) * 100;

        // Step 3: Determine if the exam is passed
        $isPassed = $percentageScore >= 75;

        // Step 4: Update HistorialExamen with totalScore and isPassed
        $historialExamen = HistorialExamen::findOrFail($historialExamenId);
        $historialExamen->calificacion = $totalScore;
        $historialExamen->aprobado = $isPassed ? 1 : 0; // If $isPassed is true, set aprobado to 1, otherwise set it to 0
        $historialExamen->save();

        // Step 5: Pass relevant data to the view
        return view('final.fin', [
            'totalScore' => $totalScore,
            'percentageScore' => $percentageScore,
            'isPassed' => $isPassed,
        ])->with('historialExamenId', $historialExamenId);
    }
}
