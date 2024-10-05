<?php

use Illuminate\Support\Facades\Route;
use App\Models\KidsGrading;
use App\Http\Controllers\StudentController;

//Default
Route::get('/', function () {
    return view('home');
});

//Tävling
Route::get('/comp', function () {
    return view('comp');
});

//Gradering
Route::get('/grading', function() {
    $kids = KidsGrading::all();
    return view('grading', ['kids' => $kids]);
});

//Uppdatera bälte
Route::post('/update-belt/{id}', [StudentController::class, 'updateBelt'])->name('updateBelt');




