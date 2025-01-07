<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TesPerawatController;
use App\Http\Controllers\TesUmumController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/tes', function () {
    return view('tes');
})->name('tes');
Route::get('/viewberita', [BeritaController::class, 'view'])->name('viewberita');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Routes in web.php

// Routes for viewing and managing edukasi
Route::get('/viewedukasi', [EdukasiController::class, 'view'])->name('viewedukasi'); // Use this for viewing single edukasi details
Route::get('/edukasi/{id}', [EdukasiController::class, 'show'])->name('edukasi.show');



Route::get('/login', function () {
    return view('auth/login');
})->name('login');
Route::get('/register', function () {
    return view('auth/register');
});
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/get-provinsi', [UserController::class, 'getProvinsi']);
Route::get('/get-kota', [UserController::class, 'getKota']);

// Edit profil harus login
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [UserController::class, 'showEditProfileForm'])->name('profile.edit');
    Route::put('/profile/edit', [UserController::class, 'updateProfile'])->name('profile.update');
// Edukasi
    Route::get('/daftaredukasi', [EdukasiController::class, 'index'])->name('edukasi.index'); // List all edukasi
    Route::get('/tambahedukasi', function () {return view('admin.tambahedukasi'); // Use dot notation for views
    })->name('edukasi.create'); // Assign a name for route clarity
    Route::post('/tambahedukasi', [EdukasiController::class, 'store'])->name('edukasi.store');
    Route::get('/edukasi/edit/{id}', [EdukasiController::class, 'edit'])->name('edukasi.edit');
    Route::put('/edukasi/{id}', [EdukasiController::class, 'update'])->name('edukasi.update');
    Route::delete('/edukasi/{id}', [EdukasiController::class, 'destroy'])->name('edukasi.destroy'); // Consistent route naming\

//berita
    Route::get('/daftarberita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/deleteberita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('/tambahberita', function () {return view('admin/tambahberita');});
    Route::post('/tambahberita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/user-profiles', [UserController::class, 'showUserProfiles'])->name('user.profiles');
    Route::get('/admin/{id}/editstatus', [UserController::class, 'editStatus'])->name('admin.editstatus');
    Route::put('/admin/{id}/updatestatus', [UserController::class, 'updateStatus'])->name('admin.updatestatus');

    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');

    Route::get('/tesperawat/{test}', [TesPerawatController::class, 'index'])->name('tesperawat.index');
    Route::get('/tes/tesresult/{test}', [TesPerawatController::class, 'showresult'])->name('tes.result');
    Route::get('/tes/tesresult/{test}', [TesPerawatController::class, 'showresult'])->name('tes.result');
    Route::get('/rekap/{test}', [TesPerawatController::class, 'showriwayat'])->name('rekap.showriwayat');

}); 
Route::get('/tesumum/{test}', [TesUmumController::class, 'index'])->name('tesumum.index');
Route::get('/tes/tesresultumum', [TesUmumController::class, 'showresult'])->name('tes.resultumum');

Route::get('/opsi/{test}', [TesPerawatController::class, 'show'])->name('opsi.index');
Route::get('/welcome', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/pelaksana/store', [TesPerawatController::class, 'store'])->name('pelaksana.store');
Route::post('/tes/simpanSRQ', [TesPerawatController::class, 'storeSRQ'])->name('tes.storeSRQ');
Route::post('/tes/save', [TesUmumController::class, 'storeSRQ'])->name('tes.save');
Route::post('/tes/simpanSAS', [TesPerawatController::class, 'storeSAS'])->name('tes.storeSAS');
Route::post('/tes/simpanSDQ', [TesPerawatController::class, 'storeSDQ'])->name('tes.storeSDQ');



Route::get('/tes/tes{jenistes}', [TesPerawatController::class, 'showtes'])->name('tes.showtes');


//pdf
Route::get('/rekap/{test}/pdf', [PdfController::class, 'exportPDF']);
//excel
Route::get('/rekap/{test}/excel', [ExcelController::class, 'exportExcel']);



