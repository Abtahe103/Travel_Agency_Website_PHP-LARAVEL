<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
</head>
<body>
   <header class="overlay">
    <!-- <nav class="navbar">
        <a href="Homepage.html" class="logo"><h1>Expedia</h1></a>
        <ul>
            <li><a href="#">Home</a></li>
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
                <a href="/logout" class="log-in">{{session('user')}}</a>
            @else
                <a href="login.html" class="log-in">Log In</a>

            @endif
                
                <a href="{{url('show_cart')}}"><i class="fa-solid fa-cart-shopping cart"></i> </a>
                
        </div>
        
        
    </nav> -->
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



    <div class="caption center">
        <h1>It's time for new</h1>
        <p>ADVENTURE</p>
    </div>
        
    </header>
    <main>
        <h2 class="section-title center">Top Destinations</h2>
        <section class="top-destinations">
                
            <div class="destinations">

                <a href="india.html?country=Bangladesh"  class="destination ban">BANGLADESH</a>
                <a href="india.html?country=india" class="destination ind">INDIA</a>
                <a href="india.html?country=China"  class="destination chi">CHINA</a> 
                <a href="india.html?country=Maldives"  class="destination maldi">MALDIVES</a>
                <a href="india.html?country=Thailand"  class="destination thai">THAILAND</a> 
                <a href="india.html?country=Bhutan"  class="destination bhu">BHUTAN</a> 
                <a href="india.html?country=Nepal"  class="destination nep">NEPAL</a> 
                <a href="india.html?country=Malaysia"  class="destination malay">MALAYSIA</a>
                <a href="india.html?country=Singapur"  class="destination sing">SiNGAPUR</a>
                                
            </div>
        </section>
        <p class="section-title-package">Tour Package On <span class="last-word">Sale</span></p>
        <section class="tour-packages">
            <div class="row">
                @foreach($package as $index => $packageItem)
                    <div class="card">
                        <a href="{{url('/package_description',$packageItem->id)}}">
                            <div class="card-img">
                                <img src="package/{{$packageItem->image}}">
                            </div>
                            <div class="card-body">
                                <p>{{$packageItem->title1}}</p>
                                <p>{{$packageItem->location}}</p>
                                <i class="fa-solid fa-star star"></i>&nbsp;{{$packageItem->rating}}<br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>{{$packageItem->price}}</del><br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;{{$packageItem->discount_price}}
                            </div>
                        </a>
                    </div>
                    
                    @if(($index + 1) % 4 === 0)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>

            <!-- <div class="row">
                
                @foreach($package as $package)
                
                    <div class="card">
                        <a href="#">
                            <div class="card-img">
                                <img src="package/{{$package->image}}" title="Hawa Mahal, Jaipur, India">
                                
                            </div>
                            <div class="card-body">
                                <h1>{{$package->title1}}</h1>
                                <p>{{$package->title2}}</p>
                                <i class="fa-solid fa-star star"></i>&nbsp;{{$package->rating}}<br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>{{$package->price}}</del><br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;{{$package->discount_price}}
                            </div>
                        </a>
                        
                    </div>
                
                @endforeach -->
                    <!-- <div class="card">
                        <a href="#"><div class="card-img">
                            <img src="images/Tour packages/sebastian-pena-lambarri-_aJd9HaMHWg-unsplash.jpg" >
                            
                        </div>
                        <div class="card-body">
                            <h1>Everest Base Camp</h1>
                            <p>Nepal</p>
                            <i class="fa-solid fa-star star"></i>&nbsp;9.3<br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>40599.99</del><br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;36499.99
                        </div></a>
                        
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card-img">
                                <img src="images/Tour packages/bora-bora-3023437_1920.jpg">
                                
                            </div>
                            <div class="card-body">
                                <h1>Visit Maldives</h1>
                                <p>City Tours,Iconic</p>
                                <i class="fa-solid fa-star star"></i>&nbsp;9.5<br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>100599.99</del><br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;906499.99
                            </div>
                        </a>
                        
                    </div>
                    <div class="card">
                        <a href="#">
                            <div class="card-img">
                                <img src="images/Tour packages/saad-irfan-H3o9FLfbqZ4-unsplash.jpg">
                                
                            </div>
                            <div class="card-body">
                                <h1>Phi Phi Island</h1>
                                <p>Thailand</p>
                                <i class="fa-solid fa-star star"></i>&nbsp;8.0<br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>70599.99</del><br><br>
                                <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;60499.99
                            </div>
                        </div>
                        </a>                   -->
                    
            <!-- </div> -->
        
            <!-- <div class="row">
                <div class="card">
                    <a href="#">
                        <div class="card-img">
                            <img src="images/Tour packages/izuddin-helmi-adnan-vTveTqbaTNM-unsplash.jpg">
                            
                        </div>
                        <div class="card-body">
                            <h1>Travel Malaysia</h1>
                            <p>Kuala Lumpur</p>
                            <i class="fa-solid fa-star star"></i>&nbsp;6.0<br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>50599.99</del><br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;42499.99
                        </div>
                    </a>
                    
                </div>
                <div class="card">
                    <a href="#">
                        <div class="card-img">
                            <img src="images/Tour packages/saief-al-emon-k6VUBLn0Qr4-unsplash.jpg" >
                            
                        </div>
                        <div class="card-body">
                            <h1>Saint Martins Island</h1>
                            <p>Bangladesh</p>
                            <i class="fa-solid fa-star star"></i>&nbsp;5.5<br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>15599.99</del><br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;10499.99
                        </div>
                    </a>
                    
                </div>
                <div class="card">
                    <a href="#">
                        <div class="card-img">
                            <img src="images/Tour packages/darshan-chudasama--qIZR8ADtE0-unsplash.jpg">
                            
                        </div>
                        <div class="card-body">
                            <h1>Phobjikha Valley</h1>
                            <p>Bhutan</p>
                            <i class="fa-solid fa-star star"></i>&nbsp;4.5<br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>20599.99</del><br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;15499.99
                        </div>
                    </a>
                    
                </div>
                <div class="card">
                    <a href="#">
                        <div class="card-img">
                            <img src="images/hari-nandakumar-5U132F-itpg-unsplash.jpg">
                            
                        </div>
                        <div class="card-body">
                            <h1>Great Indian Desert</h1>
                            <p>Jaisalmir</p>
                            <i class="fa-solid fa-star star"></i>&nbsp;7.0<br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>30599.99</del><br><br>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;26499.99
                        </div>
                    </div>
                    </a>
                          
                </div> -->
            
        </section>
        
        
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