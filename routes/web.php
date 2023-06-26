<?php
namespace App\Http\Controllers;
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
    return view('Homepage');
});

Route::get('/Homepage.html', function () {
    return view('Homepage');
});

Route::get('/about.html', function () {
    
    return view('about');
});

// Route::get('/login.html', function () {
//     return view('login');
// });

// Route::get('/register.html', function () {
//     return view('register');
// });

Route::get('/india.html', function () {
    return view('india');
});

Route::get('/cart.html', function () {
    return view('cart');
});

Route::get('/register.html',[RegistrationController::class,'index']);
Route::post('/register.html',[RegistrationController::class,'register']);

Route::get('/login.html',[LoginController::class,'index']);
Route::post('/login.html',[LoginController::class,'check']);

Route::get('/logout',function(){
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return back()->with('fail');
});

