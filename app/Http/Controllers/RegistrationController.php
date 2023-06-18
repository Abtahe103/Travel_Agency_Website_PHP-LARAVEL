<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        
        // $input = request()->all();
        // Register::create(['email'=>$input['email'],'password'=>$input['password']
        // ]);
        $register = new Register;
        $register->username = $request['username'];
        $register->email = $request['email'];
        $register->password =$request['password'];
        $register->save();
        return back()->with('success','Registered successfully');
    }
}