<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskingController;

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
//     return view('index');
// });

<<<<<<< Updated upstream
Route::get('/tasking',[TaskingController::class, 'index']);
Route::get('/tasking/create',[TaskingController::class,'create']);
Route::post('/tasking',[TaskingController::class, 'store']);

=======
Route::get('/', [TaskingController::class, 'index']);
Route::get('/tasking/create', [TaskingController::class, 'create']);
Route::post('/tasking', [TaskingController::class, 'store']);
>>>>>>> Stashed changes


