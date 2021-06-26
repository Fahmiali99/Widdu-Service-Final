<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\CodingController;
use App\Http\Controllers\VektorController;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelolaController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CodingdataController;
use App\Http\Controllers\VektordataController;
use App\Http\Controllers\MusicdataController;

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
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/coding', function () {
    return view('coding');
});

Route::get('/vektor', function () {
    return view('vektor');
});

Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::prefix('admin')->middleware('auth.admin')->group(function(){
    Route::get('kelola', [KelolaController::class, 'index'])->name('admin.kelola.index');
    Route::get('kelola', [KelolaController::class, 'index'])->name('admin.kelola.index');
    Route::get('kelola', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('authors/store', [AuthorController::class, 'store'])->name('authors.store');
    Route::get('authors/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::put('authors/update/{id}', [AuthorController::class, 'update'])->name('authors.update');
    Route::delete('authors/destroy/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');
    Route::resource('news', NewsController::class);
    Route::get('codings', [CodingdataController::class, 'index'])->name('codings.index');
    Route::get('codings/create', [CodingdataController::class, 'create'])->name('codings.create');
    //Route::post('codings/store', [CodingdataController::class, 'store'])->name('codings.store');
    Route::get('codings/edit/{id}', [CodingdataController::class, 'edit'])->name('codings.edit');
    Route::put('codings/update/{id}', [CodingdataController::class, 'update'])->name('codings.update');
    Route::delete('codings/destroy/{id}', [CodingdataController::class, 'destroy'])->name('codings.destroy');
    //vektor.
    Route::get('vektors', [VektordataController::class, 'index'])->name('vektors.index');
    Route::get('vektors/create', [VektordataController::class, 'create'])->name('vektors.create');
    //Route::post('codings/store', [CodingdataController::class, 'store'])->name('codings.store');
    Route::get('vektors/edit/{id}', [VektordataController::class, 'edit'])->name('vektors.edit');
    Route::put('vektors/update/{id}', [VektordataController::class, 'update'])->name('vektors.update');
    Route::delete('vektors/destroy/{id}', [VektordataController::class, 'destroy'])->name('vektors.destroy');
    //music.
    Route::get('musics', [MusicdataController::class, 'index'])->name('musics.index');
    Route::get('musics/create', [MusicdataController::class, 'create'])->name('musics.create');
    //Route::post('codings/store', [CodingdataController::class, 'store'])->name('codings.store');
    Route::get('musics/edit/{id}', [MusicdataController::class, 'edit'])->name('musics.edit');
    Route::put('musics/update/{id}', [MusicdataController::class, 'update'])->name('musics.update');
    Route::delete('musics/destroy/{id}', [MusicdataController::class, 'destroy'])->name('musics.destroy');

});
Route::post('codings', [CodingdataController::class, 'store'])->name('codings.store');
Route::post('vektors', [VektordataController::class, 'store'])->name('vektors.store');
Route::post('musics', [MusicdataController::class, 'store'])->name('musics.store');

// Route::get('/', function () {
//     return view('welcome');
// });