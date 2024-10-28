<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\eBookController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\GaleriAdminController;
Use App\Http\Controllers\profilAdminController;
Use App\Http\Controllers\userAdminController;
Use App\Http\Controllers\visimisiAdminController;
Use App\Http\Controllers\bukuTamuAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/ebook', [eBookController::class, 'index'])->name('ebook');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [IndexAdminController::class, 'index'])->name('index');
    Route::get('/blog', [BlogAdminController::class, 'index'])->name('blog');
    Route::get('/create-blog', [BlogAdminController::class, 'create'])->name('create-blog');
    Route::get('/edit-blog', [BlogAdminController::class, 'edit'])->name('edit-blog');
    Route::get('/galeri', [GaleriAdminController::class, 'index'])->name('galeri');
    Route::get('/create-galeri', [GaleriAdminController::class, 'create'])->name('create-galeri');
    Route::get('/edit-galeri', [GaleriAdminController::class, 'edit'])->name('edit-galeri');
    Route::get('/profil', [ProfilAdminController::class, 'index'])->name('profil');
    Route::get('/create-profil', [ProfilAdminController::class, 'create'])->name('create-profil');
    Route::get('/edit-profil', [ProfilAdminController::class, 'edit'])->name('edit-profil');
    Route::get('/user', [userAdminController::class, 'index'])->name('user');
    Route::get('/create-user', [userAdminController::class, 'create'])->name('create-user');
    Route::get('/edit-user', [userAdminController::class, 'edit'])->name('edit-user');
    Route::get('/visimisi', [visimisiAdminController::class, 'index'])->name('visimisi');
    Route::get('/create-visimisi', [visimisiAdminController::class, 'create'])->name('create-visimisi');
    Route::get('/edit-visimisi', [visimisiAdminController::class, 'edit'])->name('edit-visimisi');
    Route::get('/bukutamu', [bukuTamuAdminController::class, 'index'])->name('bukutamu');
    Route::get('/create-bukutamu', [bukuTamuAdminController::class, 'create'])->name('create-bukutamu');
    Route::get('/edit-bukutamu', [bukuTamuAdminController::class, 'edit'])->name('edit-bukutamu');
});
Route::get('/login', function () {
    return view('login');
});
