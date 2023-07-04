<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        
        // $request->validate([
        //     'username' => 'unique:Register|required',
        //     'email' => 'required|email|unique:Register',
        //     'password' => 'required|min:6|confirmed',
        // ]);
        $validator = Validator::make($request->all(), [
            'username' => 'unique:Register|required',
            'email' => 'required|email|unique:Register',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        // $input = request()->all();
        // Register::create(['email'=>$input['email'],'password'=>$input['password']
        // ]);
        $register = new Register;
        $register->username = $request['username'];
        $register->email = $request['email'];
        $register->password = Hash::make($request['password']);
        $register->save();
        return back()->with('success','Registered successfully');
    }
}