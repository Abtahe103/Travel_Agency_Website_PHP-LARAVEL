@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/about.css">
@endsection
@section('header')
    @include('layout.navbar')
@endsection

@section('main')
<div class="about-section">
    <div class="container">
        <div class="content-section">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div class="content">
                <h3>Welcome to our world of adventure and exploration! 
                    <p> At our Travel Agency,we believe that travel is not just a means of getting from one place to another,
                        but an opportunity to discover new cultures, meet new people, and create unforgettable 
                        memories. As a team of passionate travelers ourselves, we understand the transformative 
                        power of travel, and we are committed to helping you create the perfect travel experience 
                        that reflects your unique interests and preferences. With years of experience in the travel 
                        industry and a deep love for discovering the world, we are your trusted partners in travel. 
                        From the moment you reach out to us until you return home, we will work tirelessly to ensure 
                        that every aspect of your journey is seamless, stress-free, and tailored to your specific needs.
                            So come join us on an adventure of a lifetime – we can't wait to help you explore the world!
                    </p>
            </div>
        </div>

        <div class="image-section">
            <img src="images/Login/photo-1504193902866-27cfb5aafcc8.jpeg" width="500px">
        </div>

    </div>
</div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
    