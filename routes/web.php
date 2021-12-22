<?php

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
    return view('auth.login');
});

Route:: prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');


    });
    Route::get('/AddAdmin', function () {
        return view('admin.AddAdmin');


    });

    Route::get('/viewAdmin', function () {
        return view('admin.viewAdmin');
    });
    Route::get('/viewUser', function () {
        return view('admin.viewUser');
    });
    Route::get('/userDocument', function () {
        return view('admin.userDocument');
    });
    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    });




});


Route::get('/User/Form', function () {
    return view('UserForm');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
