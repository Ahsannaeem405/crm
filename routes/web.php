<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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


Route::get('/apihit', function () {
    return view('admin.apihit');
});



Route::get('/', function () {
    // if (Auth::check()) {



        if(isset($_COOKIE['check'])) {

            return view('auth.login');
        }
        else
        {
            return view('auth.register');
        }



    // }
    // else
    // {
        //  return view('auth.register');

    // }
});


Route::group(['middleware' => 'auth'], function () {

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/AddAdmin', function () {
        return view('admin.AddAdmin');
    });

    Route::get('/viewAdmin', function () {
        return view('admin.viewAdmin');
    });
    Route::get('/reporting', function () {
        return view('admin.viewUser');
    });
    Route::get('/userDocument', function () {
        return view('admin.userDocument');
    });
    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    });


    Route::Post('/saveAdmin', [AdminController::class, 'create'])->name('saveAdmin');

    Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');

    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/update', [AdminController::class, 'update'])->name('update');

    Route::post('/form_save', [AdminController::class, 'form_save'])->name('form_save');

    Route::get('generate-pdf/{id}', [AdminController::class, 'generatePDF']);

});




Route::prefix('/user')->group(function () {


    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    });

    Route::get('/viewDocument', [AdminController::class, 'viewDocument']);

    Route::get('/user/form', function () {
        return view('UserForm');
    });
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myfile', function () {
    return view('myFile');
});
Route::get('/testdata', function () {
    return view('testdata');
});
