<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
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
    return view('welcome', [
        'name' => 'tran huu thien',
        'age' => 30,
        'gender' => 2,
        'bio' => "<strong>FPT Polytechnic</strong><br><i>something</i>"
    ]);
});
Route::view('demo', 'admin.layouts.main');
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::any('logout', function(){
    Auth::logout();
    return redirect(route('login'));
});

Route::any('forbidden', function(){
    return "Bạn không có quyền truy cập vào đường dẫn này!";
})->name('403');




