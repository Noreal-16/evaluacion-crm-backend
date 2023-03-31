<?php
 
use App\Http\Middleware\UserAuth;
use App\Http\Middleware\UserSugarAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthSugarController;
use App\Http\Controllers\ErrorController; 

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
require __DIR__.'/auth.php'; 
require __DIR__.'/services.php';

Route::middleware([UserAuth::class])->group(function () { 
    Route::get('login_sugar', [AuthSugarController::class, 'index'])->name('login_sugar.index');
    Route::post('login_sugar', [AuthSugarController::class, 'login'])->name('login_sugar');
    Route::get('logout_sugar', [AuthSugarController::class, 'logout'])->name('logout_sugar');
    Route::get('/error',[ErrorController::class, 'show'])->middleware([UserSugarAuth::class])->name('error');
 
});
 

Route::get('{any}', function () {
    return view('apidoc/index');
})->where('any', '.*');


