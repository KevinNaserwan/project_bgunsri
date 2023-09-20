<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BGU_controller;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('Register.main');
});



Route::get('/admin', [RouteController::class, 'admin']);
Route::get('/admin-datauser', [RouteController::class, 'admindatauser']);
Route::get('/admin-datapendaftar', [RouteController::class, 'admindatapendaftar']);
Route::get('/admin-pasfoto', [RouteController::class, 'pasfoto']);
Route::get('/admin-closebody', [RouteController::class, 'closeup']);
Route::get('/admin-fullbody', [RouteController::class, 'fullbody']);
Route::get('/detail/{nim}', [RouteController::class, 'detail']);
Route::get('/print/{nim}', [RouteController::class, 'print'])->name('print');
Route::get('/voucher',[RouteController::class,'voucher']);

Route::get('/form-register', function () {
    return view('DaftarBGU.datauser');
})->middleware('auth');

Route::get('/form-register2', function () {
    return view('DaftarBGU.form-regist2');
})->middleware('auth');

Route::get('/form-register3', function () {
    return view('DaftarBGU.pendidikanonformal');
})->middleware('auth');

Route::get('/form-register4', function () {
    return view('DaftarBGU.pengalaman');
})->middleware('auth');

Route::get('/form-register5', function () {
    return view('DaftarBGU.kemampuan');
})->middleware('auth');

Route::get('/form-register6', function () {
    return view('DaftarBGU.prestasi');
})->middleware('auth');

// Route::get('/form-register7', function () {
//     return view('DaftarBGU.motivasi');
// })->middleware('auth');


Route::get('/dashboard', function () {
    return view('DaftarBGU.dashboard');
})->middleware('auth');

Route::get('/login', function () {
    return view('Login.main');
})->name('login');

route::post('/storeuser', [AuthController::class, 'storeuser']);
route::post('/loginproses', [AuthController::class, 'loginproses']);
Route::post('/postregist', [BGU_controller::class, 'storeregist1'])->middleware('auth');
Route::post('/postregist2/{nim}', [BGU_controller::class, 'storeregist2'])->middleware('auth');
Route::post('/postregist3/{nim}', [BGU_controller::class, 'storeregist3'])->middleware('auth');
Route::post('/postregist4/{nim}', [BGU_controller::class, 'storeregist4'])->middleware('auth');
Route::post('/postregist6/{nim}', [BGU_controller::class, 'storeregist6'])->middleware('auth');
Route::post('/postregist5/{nim}', [BGU_controller::class, 'storeregist5'])->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
