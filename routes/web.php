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

Route::group(['middleware' => ['auth:sanctum']], function() {

    Route::resources([
        'users' => 'App\Http\Controllers\UserController',
        'assessments' => 'App\Http\Controllers\AssessmentController',
        'departments' => 'App\Http\Controllers\DepartmentController',
    ]);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/meetLinks', function () {
        return view('meet.index');
    })->name('meet');

    Route::get('/counselor-home', function () {
        return view('graph.index');
    })->name('graph');

    Route::get('/schedule', function () {
        return view('calendar.index');
    })->name('calendar');

    Route::get('/students', function () {
        return view('studtable.index');
    })->name('studtable');

    Route::get('/student-list', function () {
        return view('studtable.note');
    })->name('note');

    Route::get('/inbox', function () {
        return view('message.index');
    })->name('message');

    Route::get('/counselors', function () {
        return view('counselor.index');
    })->name('counselor');

    Route::get('/counselor-archive', function () {
        return view('counselor.archive');
    })->name('archive');

    Route::get('/daily-view', function () {
        return view('calendar.daily');
    })->name('daily');

    Route::get('/assessment-list', function () {
        return view('assessment.list');
    })->name('list');

    Route::get('/assessment-NeedsAnalysis', function () {
        return view('assessment.needsanalysis');
    })->name('needsanalysis');



    Route::post('/file-upload', 'App\Http\Controllers\UserController@multipleUpload')->name('multipleupload');

});
