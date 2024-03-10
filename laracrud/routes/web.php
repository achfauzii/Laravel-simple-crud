<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//route controlller
Route::get('/', [HomeController::class, 'index']);

Route::post('/add_product', [HomeController::class, 'add_product']);

Route::get('/show_product', [HomeController::class, 'show_product']);

Route::get('delete_product/{id}', [HomeController::class, 'delete_product']);

Route::get('update_product/{id}', [HomeController::class, 'update_product']);
Route::post('edit_product/{id}', [HomeController::class, 'edit_product']);
