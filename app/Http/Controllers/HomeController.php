<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\package_sale;

use App\Models\all_packages;

use App\Models\Register;

use App\Models\cart;

use App\Models\country_grid;

class HomeController extends Controller
{
    public function index()
    {
        if (session('usertype') == '1') {
            // Redirect admin to view all packages page
            return redirect('/view_all_package');
        }
        $package = all_packages::where('package_type', 'special')->get();
        return view('Homepage', compact('package'));
    }

    public function packageView()
    {
        $package = all_packages::all();
        return view('packageView', compact('package'));
    }


    public function package_description($id)
    {
        $package=all_packages::find($id);
        return view('package_description',compact('package'));

    }
    public function grid()
    {
        $country = request()->query('country');
        $package = all_packages::where('country', $country)->get();
        $template = country_grid::where('country', $country)->first();
        return view('grid', compact('package','template'));
    }

    public function add_cart($id)
    {
    // Check if user is logged in
    if (session()->has('user')) {
        // User is logged in
        $username = session('user');
        $user = Register::where('username', $username)->first();

        $package = all_packages::find($id);

        // Check if the package already exists in the cart for the user
        $existingCart = cart::where('user_id', $user->id)
            ->where('package_id', $package->id)
            ->first();

        if ($existingCart) {
            // Package already exists in the cart, perform desired action (e.g., update quantity)
            // Example: $existingCart->quantity += 1;
            // Update any other fields as needed
            // $existingCart->save();

            // Redirect back or perform any other action
            return redirect()->back();
        } 
        else {
            // Package doesn't exist in the cart, create a new entry
            $cart = new cart;
            $cart->name = $user->username;
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->package_title = $package->title1;
            $cart->package_id = $package->id;
            $cart->price = $package->discount_price;
            $cart->image = $package->image;

            // Save the cart item to the database
            $cart->save();

            return redirect()->back()->with('message', 'Package already added to cart.');
        }
    } 
    else {
        // User is not logged in
        // You can redirect to the login page or display an error message
        return redirect('login')->with('error', 'Please log in to add items to the cart.');
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
            return redirect('login')->with('error', 'Please log in to add items to the cart.');
        }
        
    }

    public function show_profile()
    {
        $username = session('user');
        $user = Register::where('username', $username)->first();

        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request,$id)
    {
        $user=Register::find($id);

        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->address=$request->address;

        $user->save();

        return redirect()->back()->with('message','Package updated Successfully');
    }

    public function delete_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect()->back();

    }

    

}   