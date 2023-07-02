<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;



class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    
    public function check(Request $request){
        $user = Register::where('email', $request->input('email'))->first();

    
        if ($user && Hash::check($request->input('password'), $user->password)) {
            $usertype = $user->usertype;

            if($usertype=='1')
            {
                $request->session()->put('user', $user->username);
                return redirect('./admin.home')->with('success', 'Login successful');
            }
            else{
                $request->session()->put('user', $user->username);
                return redirect('Homepage.html')->with('success', 'Login successful');
            }
        }
            
        else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    
}