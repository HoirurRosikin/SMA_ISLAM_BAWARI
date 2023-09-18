<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaranMasukanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/profile', [HomePageController::class, 'indexp'])->name('profil');
Route::get('/home', [HomePageController::class, 'index'])->name('home');
Route::get('/siswa', [HomePageController::class, 'siswa'])->name('siswa');
Route::get('/guru', [HomePageController::class, 'guru'])->name('guru');



Route::get('/download/{id}', [HomePageController::class, 'download_pdf'])->name('download');

// home
Route::get('/visi-misi', [HomePageController::class, 'visi_misi'])->name('visi');
Route::get('/sejarah-singkat', [HomePageController::class, 'sejarah'])->name('sejarah');
Route::get('/sarjana', [HomePageController::class, 'sarjana'])->name('sarjana');
Route::get('/struktur-organisasi', [HomePageController::class, 'struktur'])->name('struktur');
Route::get('/sambutan-kepala-sekolah', [HomePageController::class, 'sambutan'])->name('sambutan');
Route::get('/kemitraan', [HomePageController::class, 'kemitraan'])->name('kemitraan');
Route::get('/program-kerja', [HomePageController::class, 'program'])->name('program');
Route::get('/komite-sekolah', [HomePageController::class, 'komite'])->name('komite');
Route::get('/prestasi', [HomePageController::class, 'prestasi'])->name('prestasi');
// guru
Route::get('/direktori-guru', [HomePageController::class, 'direktori_guru'])->name('direktori_guru');
Route::get('/prestasi-guru', [HomePageController::class, 'prestasi_guru'])->name('prestasi_guru');
// Berita
Route::get('/berita-umum', [HomePageController::class, 'berita_umum'])->name('berita_umum');
Route::get('/berita-sekolah', [HomePageController::class, 'berita_sekolah'])->name('berita_sekolah');
//siswa
Route::get('/direktori-siswa', [HomePageController::class, 'direktori_siswa'])->name('direktori_siswa');
Route::get('/prestasi-siswa', [HomePageController::class, 'prestasi_siswa'])->name('prestasi_siswa');
Route::get('/ektrakurikuler', [HomePageController::class, 'ektrakurikuler'])->name('ektrakurikuler');
Route::get('/osis', [HomePageController::class, 'osis'])->name('osis');
// informasi
Route::get('/kalender-akademik', [HomePageController::class, 'kalender'])->name('kalender');
Route::get('/beasiswa', [HomePageController::class, 'beasiswa'])->name('beasiswa');
Route::get('/penerimaan-siswa-baru', [HomePageController::class, 'penerimaan'])->name('penerimaan');
Route::get('/informasi-alumni', [HomePageController::class, 'informasi_alumni'])->name('informasi_alumni');
// agenda
Route::get('/agenda', [HomePageController::class, 'agenda'])->name('agenda');
// kontak
Route::get('/kontak-sekolah', [HomePageController::class, 'kontak_sekolah'])->name('kontak_sekolah');
// download
Route::get('/download', [HomePageController::class, 'download'])->name('download');

Route::get('/download-lampiran/{id}', [HomePageController::class, 'download_pdf'])->name('download_pdf');



Route::get('/detail-blog/{id}', [HomePageController::class, 'detail'])->name('detail.blog');









Route::get('saran', [SaranMasukanController::class, 'index'])->name('saran')->middleware('auth');
Route::get('saran/show/{id}', [SaranMasukanController::class, 'show'])->name('saran.show')->middleware('auth');
Route::get('saran/delete/{id}', [SaranMasukanController::class, 'delete'])->name('saran.delete')->middleware('auth');
Route::post('saran/save', [SaranMasukanController::class, 'save_saran'])->name('saran.save');




// ==================auth
Route::get('/register', [RegisController::class, 'index'])->name('register');
Route::post('/register', [RegisController::class, 'store'])->name('register.create');;



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// ==================auth


// Route::get('/app', function () {
//     return view('layouts.app');
// });
// Route::get('/dashboard', function () {
//     return view('admin.dashboard.index');
// });
// Route::get('/admin', function () {
//     return view('admin.admin.index');
// });

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');



Route::get('admin', [AdminContoller::class, 'index'])->name('admin')->middleware('auth');
Route::post('admin/save', [AdminContoller::class, 'save_admin'])->name('admin.save')->middleware('auth');
Route::get('admin/delete/{id}', [AdminContoller::class, 'delete_admin'])->name('admin.delete')->middleware('auth');


Route::get('blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::post('blog/save', [BlogController::class, 'save_blog'])->name('blog.save')->middleware('auth');
Route::get('blog/create', [BlogController::class, 'create_blog'])->name('blog.create')->middleware('auth');
Route::get('blog/edit/{id}', [BlogController::class, 'edit_blog'])->name('blog.edit')->middleware('auth');
Route::get('blog/show/{id}', [BlogController::class, 'show_blog'])->name('blog.show')->middleware('auth');
Route::get('blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('blog.delete')->middleware('auth');
// Route::get('lansia/delete/{id}', [LansiaController::class, 'delete'])->name('lansia.delete')->middleware('auth');



// Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');



