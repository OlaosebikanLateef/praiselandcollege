<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\AdminController;
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


Route::get('/editUsers/{id}', [UserController::class, 'editUsers'])->name('editUsers')->middleware('auth');


Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

Route::put('/updateUser/{id}', [UserController::class, 'updateUser'])->name('updateUser')->middleware('auth');

Route::post('/submitLogin', [LoginController::class, 'submitLogin'])->name('submitLogin');



Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

Route::get('/userProfile/{id}', [DashboardController::class, 'userProfile'])->name('userProfile');

Route::get('/result', [ResultController::class, 'result'])->name('result');

Route::get('/results', [ResultController::class, 'viewResult'])->name('viewResult');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/adminAccess', [DashboardController::class, 'adminAccess'])->name('adminAccess');

Route::get('/adminLogin', [LoginController::class, 'adminLogin'])->name('adminLogin');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



Route::post('/submitResult', [ResultController::class, 'submitResult'])->name('submitResult');

Route::post('/login2', [LoginController::class, 'login2'])->name('login2');


Route::get('/loginn', [LoginController::class, 'loginn'])->name('loginn');

//admin

Route::group(['middleware' => 'user'], function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::group(['middleware' => 'admin'], function (){

    Route::get('/getUsers', [UserController::class, 'getUsers'])->name('getUsers');

    Route::get('/resultUpload', [ResultController::class, 'resultUpload'])->name('resultUpload');

});


//logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
