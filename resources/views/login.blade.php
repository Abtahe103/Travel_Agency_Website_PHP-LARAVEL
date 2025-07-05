@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/login.css">
@endsection

@include('layout.navbar')

@section('header')
<div class="wrapper">
            <div class="form-box">
                <div class="box-item">
                    @if(Session::has('error'))
                        <div class="alert-danger" role="alert">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <h2>Login</h2>
                    <form action="login" method="post">
                    @csrf
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forget">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot Password</a>
                        
                        </div>
                        <button type="submit" class="btn">Login</button>
                        <div class="login-register">
                            <p>Don't have an account?<a href="register" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
@endsection