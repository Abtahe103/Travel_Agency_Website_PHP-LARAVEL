<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\Register;



class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    
    public function check(Request $request){
        $user = Register::where('email', $request->input('email'))->first();
    
        if ($user && Hash::check($request->input('password'), $user->password)) {
            $request->session()->put('user', $user->email);
            return redirect('Homepage.html')->with('success', 'Login successful');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    
}