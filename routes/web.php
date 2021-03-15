<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Editor\KategoriController;
use App\Http\Controllers\Creator\BeritaController;

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
    return view('Dashboard/content');
});

Route::group(['as'=>'Editor.','prefix'=>'/Editor'],function() {
    // add default view dashboard editoor Kategori
    Route::group(['as'=>'Kategori.','prefix'=>'/Kategori'],Function() {
        Route::get('/', [KategoriController::class,'index'])->name('index');
        Route::post('/Add', [KategoriController::class,'add'])->name('Add');
        Route::get('/Delete/{id}', [KategoriController::class,'delete'])->name('Delete');
        Route::POST('/Update/{id}', [KategoriController::class,'update'])->name('Update');
    });
});
Route::group(['as'=>'Creator.','prefix'=>'/Creator'],function() {
    // add default view dashboard Creator Berita
    Route::group(['as'=>'Berita.','prefix'=>'/Berita'],Function() {
        Route::get('/', [BeritaController::class,'index'])->name('Index');
        Route::get('/Input', [BeritaController::class,'input'])->name('Input');
        Route::post('/Add', [BeritaController::class,'add'])->name('Add');
        Route::get('/Delete/{id}', [BeritaController::class,'delete'])->name('Delete');
        Route::POST('/Update/{id}', [BeritaController::class,'update'])->name('Update');
    });
});
