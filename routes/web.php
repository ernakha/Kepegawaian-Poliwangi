<?php

use App\Http\Controllers\AnggdinController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DinlurController;
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
    Route::get('/edit-bukti/{id}', [KepanitiaanController::class, 'editbukti'])->name('bukti.edit');
    Route::post('/update-bukti/{id}', [KepanitiaanController::class, 'updatebukti'])->name('bukti.update');
});

Route::prefix('dinlurs')->group(function(){
    Route::get('/view', [DinlurController::class, 'index'])->name('dinlur.view');
    Route::get('/add', [DinlurController::class, 'create'])->name('dinlur.add');
    Route::post('/store', [DinlurController::class, 'store'])->name('dinlur.store');
    Route::get('/edit/{id}', [DinlurController::class, 'edit'])->name('dinlur.edit');
    Route::get('/delete/{id}',[DinlurController::class, 'delete'])->name('dinlur.delete');
    Route::get('/get', [AnggdinController::class, 'getData']);
    Route::get('/edit-buk/{id}', [DinlurController::class, 'editbuk'])->name('buktidin.edit');
    Route::post('/update-buk/{id}', [DinlurController::class, 'updatebuk'])->name('buktidin.update');
});

