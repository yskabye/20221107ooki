<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SessionController;

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

Route::get ('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

Route::get ('/'       , [ContactController::class, 'index']  );
Route::post('/confirm', [ContactController::class, 'confirm']) ;
Route::post('/create' , [ContactController::class, 'create' ]) ;
Route::get ('/thank'  , [ContactController::class, 'thank' ]) ;

/*Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/
Route::get ('/admin',        [ContactController::class, 'search']);
Route::get ('/admin/list',   [ContactController::class, 'datalist']);
Route::post('/admin/remove', [ContactController::class, 'remove']);

require __DIR__.'/auth.php';
