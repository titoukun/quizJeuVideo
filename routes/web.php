<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'apropos'])->name('apropos');

Route::get('questions/valider/{id}', [QuestionController::class, 'valider'])->name("questions.valider");
Route::get('questions/supprimer/{id}', [QuestionController::class, 'supprimer'])->name("questions.supprimer");
Route::get('questions/editer/{id}', [QuestionController::class, 'editer'])->name("questions.editer");
Route::post('questions/editer/{id}', [QuestionController::class, 'ajouter']);
Route::get('questions/contribuer', [QuestionController::class, 'contribuer']);
Route::post('questions/contribuer', [QuestionController::class, 'ajouter'])->name("questions.contribuer");
Route::get('questions/jouer', [QuestionController::class, 'jouer'])->name("questions.jouer");
Route::get('questions/resultats', [QuestionController::class, 'resultats'])->name("questions.resultats");
Route::get('questions/affichage', [QuestionController::class, 'recuperer_tout'])->name("questions.affichage");

require __DIR__.'/auth.php';