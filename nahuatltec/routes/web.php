<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LecturaController;
use App\Http\Controllers\UsersController;
use App\Mail\PreguntaSecreta;

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

Route::get('/', function () {
    return view('user');
});

Route::get('/404', function () {
    return view('errors/404');
});

Route::get('/400', function () {
    return view('errors/400');
});

Route::get('/500', function () {
    return view('errors/500');
});

Route::resource('ausers','App\Http\Controllers\UsersController');

// //Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::resource('/lecturas', LecturasController::class);
//     Route::get('/dashboard', function(){
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::resource('lecturas','App\Http\Controllers\LecturaController');

Route::resource('users','App\Http\Controllers\UsersController');

Route::get('/notices', [SessionsController::class, 'notices'])->name('notices.index');

Route::get('/faq', [SessionsController::class, 'faq'])->name('faq.index');

Route::get('/lecrud', [SessionsController::class, 'lecrud'])->name('lecrud.index');

Route::get('/contact', [SessionsController::class, 'contact'])->middleware('guest')->name('contact.index'); 

Route::get('/acerca', [SessionsController::class, 'acerca'])->middleware('guest')->name('acercade.index'); 

Route::get('/recover', [SessionsController::class, 'recover'])->middleware('guest')->name('recover.index');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store'); 
    

Route::post('/login', [SessionsController::class, 'login'])->name('login.store'); 

Route::get('/secret', [SessionsController::class, 'secret'])->name('password.secret');

Route::post('/question', [SessionsController::class, 'question'])->name('question.secret'); 

Route::get('/readings', [SessionsController::class, 'readings'])->middleware('auth')->name('login.readings');

Route::get('/season', [SessionsController::class, 'season'])->middleware('auth')->name('login.season');

Route::get('/store', [SessionsController::class, 'store'])->middleware('auth')->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy'); 

Route::get('/users', [UsersController::class, 'index'])->middleware('auth.admin')->name('admin.user');

Route::get('/activities', [SessionsController::class, 'activities'])->middleware('auth.admin')->name('activities.index');

Route::get('/activity', [SessionsController::class, 'activity'])->middleware('auth.user')->name('activity.index');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

Route::get('/seasons', [AdminController::class, 'season'])->middleware('auth.admin')->name('admin.season');

Route::get('/stores', [AdminController::class, 'store'])->middleware('auth.admin')->name('admin.store');

Route::get('/user', [UserController::class, 'index'])->middleware('auth.user')->name('user.index');

Route::get('/activity2', [SessionsController::class, 'activity2'])->middleware('auth.user')->name('activity2.index');

Route::get('/activity3', [SessionsController::class, 'activity3'])->middleware('auth.user')->name('activity3.index');
 
Route::resource('store', StoreController::class)->middleware('auth', 'verified');

Auth::routes(['verify'=> true]);

