<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\package_sale;

use App\Models\all_packages;

use App\Models\Register;

use App\Models\cart;

class HomeController extends Controller
{
    public function index()
    {
        $package=package_sale::all();
        return view('Homepage',compact('package'));

    }

    public function package_description($id)
    {
        $package=all_packages::find($id);
        return view('package_description',compact('package'));

    }
    public function index2()
    {
        $country = request()->query('country');
        $package = all_packages::where('country', $country)->get();
        return view('india', compact('package'));
    }

    public function add_cart($id)
    {
    // Check if user is logged in
        if (session()->has('user')) {
            // User is logged in
            $username = session('user');
            $user = Register::where('username', $username)->first();
        
            $package = all_packages::find($id);
        
            $cart = new cart;
            $cart->name = $user->username; // Assuming the user has a 'username' property
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->package_title = $package->title1;
            $cart->package_id = $package->id;
            $cart->price = $package->discount_price;
            $cart->image = $package->image;
        
            // Save the cart item to the database
            $cart->save();
        
            return redirect()->back();
        }
    
        
        else {
            // User is not logged in
            // You can redirect to the login page or display an error message
            return redirect('login.html')->with('error', 'Please log in to add items to the cart.');
        }
    }

    public function show_cart()
    {
        if (session()->has('user')) {
            // User is logged in
            $username = session('user');
            $user = Register::where('username', $username)->first();

            $user_id = $user->id;

            $cart = cart::where('user_id','=',$user_id)->get();
        
            return view('cart',compact('cart'));
        }
    
        
        else {
            // User is not logged in
            // You can redirect to the login page or display an error message
            return redirect('login.html')->with('error', 'Please log in to add items to the cart.');
        }
        
    }

}   