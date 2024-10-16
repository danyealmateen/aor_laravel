<?php
use Illuminate\Support\Facades\Route;
use App\Models\KidsGrading;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});

Route::get('/comp', function () {
    return view('comp');
});

Route::get('/gradings', function () {
    return view('gradings');
});

Route::post('/update-belt/{id}', [StudentController::class, 'updateBelt'])->name('updateBelt');

Route::get('/peewees-gradings', function () {
    return view('peewees');
});

Route::get('/adults-gradings', function () {
    return view('adults');
});

Route::get('/kids-gradings', function () {
    $kids = KidsGrading::orderBy('name')->get();
    return view('kids', ['kids' => $kids]);
});
