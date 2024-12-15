<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SinifController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnasayfaCategoryController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\SiniflarController;
use App\Http\Controllers\HakkimizdaController;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\UyeolController;


    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/giris', [SiteController::class, 'getGiris'])->name('getGiris.giris');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    /*Sınıf Rotaları*/
    Route::get('/sinif', [SinifController::class, 'getAllSinif'])->name('getAllSinif');
    Route::get('/sinif-ekle', [SinifController::class, 'getCreateSinif'])->name('getCreateSinif');
    Route::post('/sinif-ekle', [SinifController::class, 'postCreateSinif'])->name('postCreateSinif');
    Route::get('/sinif-duzenle', [SinifController::class, 'getEditSinif'])->name('getEditSinif');
    Route::post('/sinif-duzenle', [SinifController::class, 'postEditSinif'])->name('postEditSinif');
    Route::get('/sinif-sil', [SinifController::class, 'getDeleteSinif'])->name('getDeleteSinif');

    /*Kategori Rotaları*/
    Route::get('/category', [CategoryController::class, 'getAllCategory'])->name('getAllCategory');
    Route::get('/category-ekle', [CategoryController::class, 'getCreateCategory'])->name('getCreateCategory');
    Route::post('/category-ekle', [CategoryController::class, 'postCreateCategory'])->name('postCreateCategory');
    Route::get('/category-duzenle', [CategoryController::class, 'getEditCategory'])->name('getEditCategory');
    Route::post('/category-duzenle', [CategoryController::class, 'postEditCategory'])->name('postEditCategory');
    Route::get('/category-sil', [CategoryController::class, 'getDeleteCategory'])->name('getDeleteCategory');
});
    
    Route::get('/anasayfa', [AnasayfaCategoryController::class, 'index'])->name('index');
    Route::get('/kategoriler', [KategoryController::class, 'kategory'])->name('kategory');
    Route::get('/Siniflar', [SiniflarController::class, 'siniflar'])->name('siniflar');
    Route::get('/hakkimizda', [HakkimizdaController::class, 'hak'])->name('hakkimizda');
    Route::get('/Kullanici', [KullaniciController::class,'GirisFormu'])->name('Kullanici');
    Route::get('/Uyeol', [UyeolController::class,'getCreateUye'])->name('getCreateUye');
    Route::post('/Uyeol', [UyeolController::class, 'postCreateUye'])->name('postCreateUye');
    
