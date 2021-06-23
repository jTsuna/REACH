<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('users', 'App\Http\Controllers\UserController');

Route::resource('assessments', 'App\Http\Controllers\AssessmentController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/meet-link', function () {
    return view('meet.index');
})->name('meet');

Route::middleware(['auth:sanctum', 'verified'])->get('/counselor-home', function () {
    return view('graph.index');
})->name('graph');

Route::middleware(['auth:sanctum', 'verified'])->get('/schedule', function () {
    return view('calendar.index');
})->name('calendar');

Route::middleware(['auth:sanctum', 'verified'])->get('/students', function () {
    return view('studtable.index');
})->name('studtable');

Route::middleware(['auth:sanctum', 'verified'])->get('/student-list', function () {
    return view('studtable.note');
})->name('note');

Route::middleware(['auth:sanctum', 'verified'])->get('/inbox', function () {
    return view('message.index');
})->name('message');

