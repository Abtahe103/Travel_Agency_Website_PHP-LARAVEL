<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/package_description.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>

</head>
<body>
<header class="overlay">
        <nav class="navbar">
            <a href="Homepage.html" class="logo"><h1>Expedia</h1></a>
            <ul>
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Package</a></li>
                <div class="dropdown-container">
                    <li><a href="#">Service</a></li>
                    <div class="dropdown-content">
                        <a href="#">Adventure</a>
                        <a href="#">Tour Guide</a>
                        <a href="#">Trekking</a>
                        <a href="#">Camp Fire</a>
                        <a href="#">Off Road</a>
                        <a href="#">Camping</a>
                    </div>
    
                </div>
                
                <li><a href="#">Blog</a></li>
            </ul>
            <div>
            @if(session('user'))
                <a href="/logout" class="log-in">Log Out</a>
            @else
                <a href="login.html" class="log-in">Log In</a>

            @endif
                
                <a href="cart.html"><i class="fa-solid fa-cart-shopping cart"></i> </a>
                
        </div>
            
            
        </nav>
    
            
        </header>
        <main>
    <section class="tour-info">
      <div class="tour-image">
        <img src="images/adli-wahid-A87rz-MJN_E-unsplash.jpg" alt="Tour Image">
      </div>
      <div class="tour-details">
        <h2>Exotic Adventure Tour</h2>
        <p class="tour-duration">Duration: 7 Days / 6 Nights</p>
        <h3>Tour Description</h3>
        <div class="tour-description">
          <h4>Day 1: Arrival</h4>
          <p>Upon arrival, you will be greeted by our friendly tour guide and transferred to your hotel. Spend the rest of the day at leisure.</p>
          <h4>Day 2: Exploring the City</h4>
          <p>Embark on a full-day city tour, visiting iconic landmarks and immersing yourself in the local culture.</p>
          <h4>Day 3: Adventure in the Wilderness</h4>
          <p>Get ready for an exciting day of outdoor activities, including hiking, river rafting, and zip-lining through lush forests.</p>
          <h4>Day 4: Cultural Experience</h4>
          <p>Immerse yourself in the local traditions and customs as you visit traditional villages and participate in cultural activities.</p>
          <h4>Day 5: Nature's Wonders</h4>
          <p>Explore stunning natural wonders, including majestic waterfalls, pristine lakes, and breathtaking landscapes.</p>
          <h4>Day 6: Relaxation and Leisure</h4>
          <p>Spend the day at a luxurious spa, indulging in rejuvenating treatments and enjoying leisure time at the resort.</p>
          <h4>Day 7: Departure</h4>
          <p>It's time to say goodbye to this amazing destination. Our team will transfer you to the airport for your departure flight.</p>
        </div>
        <p class="tour-price">Price: $1999 per person</p>
        <button class="book-now-button">Book Now</button>
      </div>
    </section>

    <section class="tour-highlights">
      <h3>Tour Highlights</h3>
      <ul>
        <li>Visit ancient temples and historical landmarks</li>
        <li>Experience thrilling outdoor activities</li>
        <li>Enjoy authentic local cuisine</li>
        <li>Explore hidden natural wonders</li>
        <li>Interact with local communities</li>
      </ul>
    </section>

    <section class="tour-gallery">
      <h3>Photo Gallery</h3>
      <div class="image-grid">
        <img src="gallery-image1.jpg" alt="Gallery Image 1">
        <img src="gallery-image2.jpg" alt="Gallery Image 2">
        <img src="gallery-image3.jpg" alt="Gallery Image 3">
        <img src="gallery-image4.jpg" alt="Gallery Image 4">
      </div>
    </section>
  </main>
  
</body>
</html>