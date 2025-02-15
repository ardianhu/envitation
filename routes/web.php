<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use App\Models\Invitation;

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
    return view('landing');
});
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/login', [Auth\LoginController::class, 'login']);

Route::group(['middleware' => 'user'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
    Route::get('/create_invitation', [HomeController::class, 'create_invitation']);
    Route::post('/add-invitation', [InvitationController::class, 'store']);
});

Route::group(['middleware' => 'admin'], function () {
    // Define your admin-only routes here
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/user_list', [AdminController::class, 'userList']);
    Route::get('/getuserdata', [AdminController::class, 'getuserdata'])->name('getuserdata');
    Route::post('/adduser', [AdminController::class, 'adduser']);
    Route::delete('/delete_user', [AdminController::class, 'delete_user']);
    Route::get('/edit_user', [AdminController::class, 'edit_user']);
    Route::post('/update_user', [AdminController::class, 'update_user']);
    Route::get('/pyscript', [AdminController::class, 'pyscript']);
});
Route::get('/{url}/{receiver}', [InvitationController::class, 'show']);
