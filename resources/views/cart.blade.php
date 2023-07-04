<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
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
    <main>
        <div class="cart-body flex-center">
            <div class="cart_item">
                <div class="cart_items-heading card">
                    <h2>Booking Cart</h2>
                    <div class="cart_items-actions">
                        
                        
                    </div>
                </div>

                <?php $total_price=0 ?>

                @foreach($cart as $cart)

                <div class="cart_item card flex-space-around">
                    <!-- <input type="checkbox" name="" id=""> -->
                    <img src="/package/{{$cart->image}}" alt="" class="cart_item-img">
                    <div class="cart_item-description">
                        <h3 class="product_name">{{$cart->package_title}}</h3>
                        <h4 class="product_price">{{$cart->location}}</h4>
                        
                    </div>
                    <div class="cart_item-actions">
                        <form action="{{url('delete_cart',$cart->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <button class="btn">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        </form>
                        
                        <div>
                            <!-- <button class="btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <span>{{$cart->quantity}}</span>
                            <button class="btn">
                                <i class="fa-solid fa-minus"></i>
                            </button> -->
                            <label>Quantity: </label>
                            <input type="number" name="quantity" min="1" value="{{$cart->quantity}}" placeholder="Price" required>
                        </div>
                    </div>
                </div>

                <?php $total_price = $total_price + $cart->price ?>

                @endforeach


                
            </div>
            <div class="cart_payment">
                <div class="cart_payment-summary card">
                    <h2>Payment Summary</h2>
                    
                    <div>
                        <p>Total Cost:</p>
                        <p>{{$total_price}}</p>
                    </div>
                    <div>
                        <a href="{{url('booking')}}"><button class="btn cart_payment-btn">
                            Book Now
                        </button></a>
                        
                    </div>
                    
                </div>
                <div class="cart_payment-methods card">
                    <h2>Payment Method</h2>
                    <div>
                        <i class="fa-brands fa-cc-visa fa-3x"></i>
                        <i class="fa-brands fa-cc-paypal fa-3x"></i>
                        <i class="fa-brands fa-cc-amex fa-3x"></i>
                        <i class="fa-brands fa-cc-apple-pay fa-3x"></i>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>