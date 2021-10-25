<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', [MahasiswaController::class, 'viewMahasiswa'])->name('view_mhs');

Route::get('/TambahMahasiswa', [MahasiswaController::class, 'TambahMahasiswa'])->name('add_mhs');

Route::post('/addData', [MahasiswaController::class, 'addData'])->name('add');

Route::get('/getId{id}', [MahasiswaController::class, 'getId'])->name('edit_mhs');

Route::post('/editData', [MahasiswaController::class, 'editData'])->name('edit');

Route::get('/deletData{id}', [MahasiswaController::class, 'deleteData'])->name('delete');
