<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="overlay">
    <nav class="navbar">
    <a href="Homepage.html" class="logo"><h1>Expedia</h1></a>
    <ul>
        <li><a href="Homepage.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="packageView">Package</a></li>
        <!-- <div class="dropdown-container">
            <li><a href="#">Service</a></li>
            <div class="dropdown-content">
                <a href="#">Adventure</a>
                <a href="#">Tour Guide</a>
                <a href="#">Trekking</a>
                <a href="#">Camp Fire</a>
                <a href="#">Off Road</a>
                <a href="#">Camping</a>
            </div>
        </div> -->
        <li><a href="/contact">Contact</a></li>
    </ul>
    <div class="navbar-right">
        @if(session('user'))
            <div class="dropdown-container">
                <a href="#" class="log-in">{{ session('user') }}</a>
                <div class="dropdown-content">
                    <a href="/profile">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a href="login.html" class="log-in">Log In</a>
        @endif
        <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
</nav>
    </header>
    <main>
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
    </main>
    <footer>
        <h1 id="footer-text"><span>E</span>xpedia</h1>
        <div class="links">
            <a href="#"><i class="fa-brands fa-facebook link-icon"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram link-icon"></i></a>
            <a href="#"><i class="fa-brands fa-square-twitter link-icon"></i></a>
            <a href="#"><i class="fa-brands fa-youtube link-icon"></i></a>
        </div>
        <h2 class="center">© 2023 Expedia.com All rights reserved.</h2>
        <p class="center">The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
    </footer>
    
</body>
</html>