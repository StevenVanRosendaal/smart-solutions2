<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/pagina1', [PagesController::class, 'pagina1']);
Route::get('/pagina2', [PagesController::class, 'pagina2']);
Route::get('/pagina3', [PagesController::class, 'pagina3']);
