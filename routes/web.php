<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResponseController;


Route::get('/', function () {
    return view('home');
});

// Route to show the question form
Route::get('/submit-question', function() {
    return view('questionform');
});

// Route to handle form submission
Route::post('/submit-question', [QuestionController::class, 'submitQuestion']);

Route::get('/response/{id}', [ResponseController::class, 'showQuestion'])->name('showQuestion');
Route::post('/response/{id}', [ResponseController::class, 'submitResponse'])->name('submitResponse');

