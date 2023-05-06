<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
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
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/signup', [SignUpController::class, 'signup'])->name('signup');

Route::post('/submitSignUp', [SignupController::class, 'submitSignUp'])->name('submitSignUp');

Route::get('/getUsers', [UserController::class, 'getUsers'])->name('getUsers');

Route::get('/editUsers/{id}', [UserController::class, 'editUsers'])->name('editUsers');


Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

Route::post('/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');

Route::post('/submitLogin', [LoginController::class, 'submitLogin'])->name('submitLogin');

Route::post('/viewDashboard', [DashboardController::class, 'viewDashboard'])->name('viewDashboard');


