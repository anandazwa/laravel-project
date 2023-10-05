<?php

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegisterController;

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

Route::get('info', function() {echo'info';
});

Route::get('register', function() {echo'register';
});

Route::get('/show', [NewsController::class, 'show']);
Route::get('/create', [NewsController::class, 'create']);

route::get('registerController',[RegisterController::class,'index']);