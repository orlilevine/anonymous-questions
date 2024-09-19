<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('home');
});

// Route to show the question form
Route::get('/submit-question', function() {
    return view('questionform');
});

// Route to handle form submission
Route::post('/submit-question', [QuestionController::class, 'submitQuestion']);
