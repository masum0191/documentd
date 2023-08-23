<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentDiffController;
use App\Http\Controllers\DocumentVersionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/document-diffs', [DocumentDiffController::class, 'showDocumentDiffs']);
Route::get('/submit-document-version', [DocumentVersionController::class, 'showSubmitDocumentVersionForm']);
Route::post('/submit-document-version', [DocumentVersionController::class, 'submitDocumentVersion']);

