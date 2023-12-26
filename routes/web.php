<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BuktiController;
use App\Http\Controllers\KepanitiaanController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

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

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::prefix('kepanitiaans')->group(function(){
    Route::get('/view', [KepanitiaanController::class, 'index'])->name('kepanitiaan.view');
    Route::get('/add', [KepanitiaanController::class, 'create'])->name('kepanitiaan.add');
    Route::post('/store', [KepanitiaanController::class, 'store'])->name('kepanitiaan.store');
    Route::get('/edit/{id}', [KepanitiaanController::class, 'edit'])->name('kepanitiaan.edit');
    Route::get('/delete/{id}',[KepanitiaanController::class, 'delete'])->name('kepanitiaan.delete');
    Route::get('/get', [AnggotaController::class, 'getData']);
});
Route::prefix('buktis')->group(function(){
    Route::get('/add', [BuktiController::class, 'create'])->name('bukti.add');
    Route::post('/store', [BuktiController::class, 'store'])->name('bukti.store');
});

