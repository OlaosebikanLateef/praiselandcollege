<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::post('/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser');

Route::post('/submitLogin', [LoginController::class, 'submitLogin'])->name('submitLogin');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('user.access');

Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

Route::get('/userProfile/{id}', [DashboardController::class, 'userProfile'])->name('userProfile');

Route::get('/result', [DashboardController::class, 'result'])->name('result');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/adminAccess', [DashboardController::class, 'adminAccess'])->name('adminAccess');

Route::get('/adminLogin', [LoginController::class, 'adminLogin'])->name('adminLogin');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/resultUpload', [ResultController::class, 'resultUpload'])->name('resultUpload');

Route::post('/submitResult', [ResultController::class, 'submitResult'])->name('submitResult');

Route::post('/login2', [LoginController::class, 'login2'])->name('login2');

