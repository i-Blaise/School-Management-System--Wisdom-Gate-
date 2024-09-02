<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/add-student', function () {
    return view('pages.students.add-student');
})->name('add-student');

// Route::get('/all-student', function () {
//     return view('pages.students.all-student');
// })->name('all-student');

Route::get('/all-student', [StudentController::class, 'index'])->name('all-student');
