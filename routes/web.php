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
    return view('welcome');
});

Route::get('/addClassroom', [App\Http\Controllers\classroomController::class, 'index'])->name('insertClassroom');

Route::get('/showClassroom', [App\Http\Controllers\classroomController::class, 'view'])->name('viewClassroom');

Route::post('/addClassroom/store',[App\Http\Controllers\classroomController::class, 'store'])->name('addClassroom');


Route::get('/addSubject', [App\Http\Controllers\subjectController::class, 'index'])->name('insertSubject');

Route::get('/showSubject', [App\Http\Controllers\subjectController::class, 'view'])->name('viewSubject');

Route::post('/addSubject/store',[App\Http\Controllers\subjectController::class, 'store'])->name('addSubject');