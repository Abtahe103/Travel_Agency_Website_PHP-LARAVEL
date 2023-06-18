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

    
    public function check(Request $req){
        $user = Register::where('email',$req['email'])->get();
        if(($user[0]->password)==$req['password']){
            $req->session()->put('user',$user[0]->email);
            return redirect('Homepage.html')->with('success','Registered successfully');
        }
        else{
            return back()->with('error','Invalid Email or Password');
        }
    }
}