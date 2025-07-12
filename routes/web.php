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

Route::get('/Homepage',[HomeController::class,'index']);

Route::get('/about', function () {

    return view('about');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/grid',[HomeController::class,'grid']);

Route::get('/package_description', function () {
    return view('package_description');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/packageView',[HomeController::class,'packageView']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'check']);

Route::get('/logout', function () {
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    // Check if previous URL was the profile page
    $previous = url()->previous();

    if (str_contains($previous, '/profile')) {
        return redirect('/Homepage')->with('fail', 'You have been logged out.');
    }

    return redirect($previous)->with('fail', 'You have been logged out.');
});

Route::get('/logout_admin',function(){
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('Homepage')->with('fail');
});

Route::get('/logout2',function(){
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('login')->with('fail');
});

Route::get('/admin.home', function () {
    return view('admin.home');
});


// Route::get('/view_package',[AdminController::class,'view_package']);

//Route::post('/add_package',[AdminController::class,'add_package']);

// Route::get('/show_package',[AdminController::class,'show_package']);

Route::get('/delete_package/{id}',[AdminController::class,'delete_package'])->middleware('admin');

Route::get('/update_package/{id}',[AdminController::class,'update_package']);

Route::post('/update_package_confirm/{id}',[AdminController::class,'update_package_confirm']);

Route::get('/view_all_package',[AdminController::class,'view_all_package'])->middleware('admin');

Route::post('/add_all_package',[AdminController::class,'add_all_package'])->middleware('admin');

Route::get('/show_all_package',[AdminController::class,'show_all_package'])->middleware('admin');

Route::get('/update_all_package/{id}',[AdminController::class,'update_all_package'])->middleware('admin');

Route::post('/update_all_package_confirm/{id}',[AdminController::class,'update_all_package_confirm'])->middleware('admin');

Route::get('/package_description/{id}',[HomeController::class,'package_description']);

Route::get('/india.html', [HomeController::class, 'index2']);

Route::get('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::post('/delete_cart/{id}',[HomeController::class,'delete_cart']);

Route::get('/show_cart',[HomeController::class,'show_cart']);

Route::get('/profile',[HomeController::class,'show_profile']);

Route::post('/update_profile/{id}',[HomeController::class,'updateProfile']);

Route::get('/booking',[AdminController::class,'booking'])->middleware('admin');

Route::get('/orders',[AdminController::class,'orders'])->middleware('admin');

Route::get('/view_template',[AdminController::class,'view_template'])->middleware('admin');

Route::post('/add_template',[AdminController::class,'add_template']);
