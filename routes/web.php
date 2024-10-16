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
Route::get('/gradings', function () {
    return view('gradings');
});

//Uppdatera gradering (barn?)
Route::post('/update-belt/{id}', [StudentController::class, 'updateBelt'])->name('updateBelt');

//Knatte gradering
Route::get('/peewees-gradings', function () {
    return view('peewees');
});

//Vuxna gradering
Route::get('/adults-gradings', function () {
    return view('adults');
});

//Barn gradering
Route::get('/kids-gradings', function () {
    $kids = KidsGrading::orderBy('name')->get();
    return view('kids', ['kids' => $kids]);
});
