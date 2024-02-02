<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;

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

Route::get('test', [ArticleController::class,'index']);

Route::get('afficchez-articles', [ArticleController::class,'showArticle'])->name('articles');



Route::get('contact', [ArticleController::class,'contact']);
Route::get('AjouterArticle', [ArticleController::class,'ajouterArticle'])->name('ajouterArticle');

Route::post('storeArticle', [ArticleController::class,'saveArticle'])->name('storeArticle');

Route::get('editez-article/{id}', [ArticleController::class,'editerArticle'])->name('editer');

Route::post('update', [ArticleController::class,'updateArticle'])->name('update');

Route::get('supprimez-article/{id}', [ArticleController::class,'supprimerArticle'])->name('supprimerA');


Route::get('showComment/{id}',[CommentController::class,'afficezComment'])->name('showComment');