<?php

use App\Http\Controllers\BibliografiController;
use App\Http\Controllers\BibliografiKategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('bibliografiKategori/add', [BibliografiKategoriController::class, 'Store']);

Route::get('bibliografiKategori/display', [BibliografiKategoriController::class, 'Display']);

Route::get('bibliografiKategori/edit/{id}/{deskripsi}', [BibliografiKategoriController::class, 'Edit']);

Route::get('bibliografiKategori/delete/{id}', [BibliografiKategoriController::class, 'Delete']);


Route::get('bibliografi/add', [BibliografiController::class, 'Store']);

Route::get('bibliografi/display', [BibliografiController::class, 'Display']);

Route::get('bibliografi/edit/{id}/{kolom}/{value}', [BibliografiController::class, 'Edit']);

Route::get('bibliografi/delete/{id}', [BibliografiController::class, 'Delete']);