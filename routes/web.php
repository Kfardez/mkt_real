<?php

use Illuminate\Support\Facades\Route;

//Le Controller MyController
use App\Http\Controllers\MyController;
use App\Http\Controllers\MailController;

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

Route::get('/', [MyController::class, 'acceuilCont']);

Route::get('/acceuil', [MyController::class, 'acceuilCont']);

Route::get('/apropos', [MyController::class, 'aproposCont']);

Route::get('/contact', [MailController::class, 'controleEmail']);

Route::post('/contact', [MailController::class, 'envoyerEmail'])->name('send.email');

Route::get('/actualite', [MyController::class, 'actualiteCont']);


Route::get('/newsletter', [MyController::class, 'News']);
Route::post('/newsletter', [MyController::class, 'Newstraitement']);

Route::get('/galerie', [MyController::class, 'galerieCont']);

Route::get('/reglement', [MyController::class, 'reglementCont']);

Route::get('/organisation', [MyController::class, 'organisationCont']);

Route::get('/inscription', [MyController::class, 'inscriptionCont']);

Route::get('/actualite/{actualite}', [MyController::class, 'readmore']);


Route::get('/download', function () {
    $file = public_path() . "/assets/img/reglementInterieur.pdf";

    $headers = array('Content-Type : application/pdf');

    return Response::download($file, "Organisation ET Reglement.pdf", $headers);
});

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
