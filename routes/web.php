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
// Route::get('/Homepage.html', function () {
//     return view('Homepage');
// });
Route::get('/',[HomeController::class,'index']);

Route::get('/Homepage.html',[HomeController::class,'index']);

Route::get('/about.html', function () {
    
    return view('about');
});

// Route::get('/login.html', function () {
//     return view('login');
// });

// Route::get('/register.html', function () {
//     return view('register');
// });

Route::get('/india.html',[HomeController::class,'index2']);

Route::get('/package_description', function () {
    return view('package_description');
});
Route::get('/cart.html', function () {
    return view('cart');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/packageView',[HomeController::class,'packageView']);


Route::get('/contact', function () {
    return view('contact');
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

Route::get('/logout_admin',function(){
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('Homepage.html')->with('fail');
});

Route::get('/logout2',function(){
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('login.html')->with('fail');
});

Route::get('/admin.home', function () {
    return view('admin.home');
});


Route::get('/view_package',[AdminController::class,'view_package']);

Route::post('/add_package',[AdminController::class,'add_package']);

Route::get('/show_package',[AdminController::class,'show_package']);

Route::get('/delete_package/{id}',[AdminController::class,'delete_package']);

Route::get('/update_package/{id}',[AdminController::class,'update_package']);

Route::post('/update_package_confirm/{id}',[AdminController::class,'update_package_confirm']);

Route::get('/view_all_package',[AdminController::class,'view_all_package']);

Route::post('/add_all_package',[AdminController::class,'add_all_package']);

Route::get('/show_all_package',[AdminController::class,'show_all_package']);

Route::get('/update_all_package/{id}',[AdminController::class,'update_all_package']);

Route::post('/update_all_package_confirm/{id}',[AdminController::class,'update_all_package_confirm']);

Route::get('/package_description/{id}',[HomeController::class,'package_description']);

Route::get('/india.html', [HomeController::class, 'index2']);

Route::get('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::post('/delete_cart/{id}',[HomeController::class,'delete_cart']);

Route::get('/show_cart',[HomeController::class,'show_cart']);

Route::get('/profile',[HomeController::class,'show_profile']);

Route::post('/update_profile/{id}',[HomeController::class,'updateProfile']);

Route::get('/booking',[AdminController::class,'booking']);

Route::get('/orders',[AdminController::class,'orders']);

Route::get('/view_template',[AdminController::class,'view_template']);

Route::post('/add_template',[AdminController::class,'add_template']);



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });