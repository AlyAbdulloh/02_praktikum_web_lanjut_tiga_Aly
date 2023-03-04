<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/contoh', function () {
//     return "contoh";
// });

// Route::prefix('contoh')->group(function () {
//     Route::get('/aku', function () {
//         return "Aly";
//     });
// });

// Route::redirect('/', 'https://www.educastudio.com/');

Route::get('/', [HomeController::class, 'home']);


// route prefix --category
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'marbelEndFriendsKidsGames']);
    Route::get('/riri-story-books', [CategoryController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolakKidsSongs']);
});

// route param
Route::get('/news/{title}', function ($title) {
    return redirect('https://www.educastudio.com/news/'.$title);
});

//route prefix --daftar prgram
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });

    Route::get('/magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });

    Route::get('/kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

//route biasa --halaman about us
Route::get('/about-us', function () {
    return redirect('https://www.educastudio.com/about-us');
});

//resourch controller
Route::resource('contact-us', ContactController::class)->only([
    'index'
]);
   

