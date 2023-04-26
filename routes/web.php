<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
        Route::get('/greeting/{locale}', function ($locale) {
            if (!in_array($locale, ['en', 'ar'])) {
                abort(400);
            }
            session()->put("locale", $locale);
            // App::setLocale($locale);
            return redirect()->back();
        })->name('greeting');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::resource('patients',PatientController::class);
