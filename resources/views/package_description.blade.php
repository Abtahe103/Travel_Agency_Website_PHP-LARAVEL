<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/public">
    <link rel="stylesheet" href="css/package_description.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>

</head>
<body>
<header class="overlay">
<nav class="navbar">
    <a href="Homepage" class="logo"><h1>Expedia</h1></a>
    <ul>
        <li><a href="Homepage">Home</a></li>
        <li><a href="about">About</a></li>
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
        <li><a href="contact">Contact</a></li>
    </ul>
    <div class="navbar-right">
        @if(session('user'))
            <div class="dropdown-container">
                <a href="#" class="log-in">{{ session('user') }}</a>
                <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a href="login" class="log-in">Log In</a>
        @endif
        <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
</nav>
    
            
        </header>
        <main>
  <section class="tour-info">
    <div class="tour-image">
      <img src="package/{{$package->image}}" alt="Tour Image" style="height: 400px; width: 500px;">
    </div>
    <div class="tour-details">
      <div class="tour-title">
        <h2><?php echo nl2br($package->title1); ?></h2>
      </div>
      <div class="tour-description">
        <p><?php echo nl2br($package->tour_description); ?></p>
      </div>
      <form action="{{url('add_cart',$package->id)}}" method="get">
        <button class="book-now-button">Add to Cart</button>
      </form>
    </div>
  </section>
</main>

  
</body>
</html>