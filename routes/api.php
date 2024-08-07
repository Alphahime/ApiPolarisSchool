<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EvaluationController;

// Routes publiques (sans authentification nécessaire)
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/matieres', [MatiereController::class, 'index']);
Route::get('/matieres/{id}', [MatiereController::class, 'show']);
Route::get('/ues', [UEController::class, 'index']);
Route::get('/ues/{id}', [UEController::class, 'show']);
Route::get('/evaluations', [EvaluationController::class, 'index']);
Route::get('/evaluations/{id}', [EvaluationController::class, 'show']);

// Routes d'authentification
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('me', [AuthController::class, 'me'])->middleware('auth:api');

// Routes protégées par authentification (CRUD)
Route::middleware('auth:api')->group(function () {
    // Routes pour les étudiants
    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{id}', [StudentController::class, 'update']);
    Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    Route::get('/students/trashed', [StudentController::class, 'trashed']);
    Route::post('/students/{id}/restore', [StudentController::class, 'restore']);
    
    // Routes pour les matières
    Route::post('/matieres', [MatiereController::class, 'store']);
    Route::put('/matieres/{id}', [MatiereController::class, 'update']);
    
    // Routes pour les UEs
    Route::post('/ues', [UEController::class, 'store']);
    Route::put('/ues/{id}', [UEController::class, 'update']);
    Route::delete('/ues/{id}', [UEController::class, 'destroy']);

    Route::post('/evaluations', [EvaluationController::class, 'store']);
    Route::put('/evaluations/{id}', [EvaluationController::class, 'update']);
    Route::delete('/evaluations/{id}', [EvaluationController::class, 'destroy']);
});
