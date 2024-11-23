<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
})->name('landing');

Auth::routes();
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return redirect()->route('landing');
})->name('logout');

Route::get('layanan', function () {
    return view('pages/layanan');
});
Route::get('search', function () {
    return view('pages/search');
});
Route::get('fitur', function () {
    return view('pages/fitur');
});
Route::get('kontak', function () {
    return view('pages/kontak');
});

// Protect Prevent Back Button
Route::group(['middleware' => 'prevent-back-history'],function(){
    Route::group(['middleware' => 'cekstatus'],function(){
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/index', [HomeController::class, 'crud']);
        Route::get('/modul4', function () { return view('pages/registerview'); });
        Route::post('/add', [HomeController::class, 'add']);
        Route::get('/edit/{id}', [HomeController::class, 'show']);
        Route::post('/update', [HomeController::class, 'update']);
        Route::get('/delete/{id}', [HomeController::class, 'delete']);
    });
});