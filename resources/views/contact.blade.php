@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/contact.css">
@endsection

@section('header')
    @include('layout.navbar')
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-box">
            <p>Email: contact@example.com</p>
            <p>Phone: 123-456-7890</p>
            <p>Fax: 987-654-3210</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
@endsection
