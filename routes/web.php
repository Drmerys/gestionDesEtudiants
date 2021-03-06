<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UpgradeController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ActivityController;
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
Route::middleware('auth')->group(function () {
Route::get('/', [StudentController::class, 'home'])->name('welcome');
Route::get('students', [StudentController::class, 'index'])->name('students.students');
Route::post('students/create', [StudentController::class, 'store'])->name('students.create');
Route::get('/students/create', [StudentController::class, 'create'])->name('students_create');
Route::get('/students/show/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::post('/students/edit/{id}', [StudentController::class, 'update'])->name('students_edit');
Route::get('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/upgrade', [UpgradeController::class, 'showUpgrade'])->name('upgrade.student');
Route::post('upgrade/create', [UpgradeController::class, 'store'])->name('upgrade.create');
Route::get('upgrade/create', [UpgradeController::class, 'create'])->name('upgrade_create');
Route::get('/professor', [ProfessorController::class, 'index'])->name('professors.show');
Route::get('/activity', [ActivityController::class, 'index'])->name('activity.show');
Route::get('/contact', [StudentController::class, 'contact'])->name('students.contact');
});



//Route::get('/foo', '\App\Http\Controllers\TestController@foo',);
//Route::get('/bar', '\App\Http\Controllers\TestController@bar',);


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
