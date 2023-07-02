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
            <a href="cart.html"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>     
    </nav>
    <main>
        <div class="cart-body flex-center">
            <div class="cart_item">
                <div class="cart_items-heading card">
                    <h2>Shopping Cart [2 items]</h2>
                    <div class="cart_items-actions">
                        <label for="select">
                            <input type="checkbox" name="select" id="select">
                            Select all items
                        </label>
                        <button class="btn"><i class="fa-solid fa-trash"></i></button>
                        <button class="btn">Shop More</button>
                    </div>
                </div>

                @foreach($cart as $cart)

                <div class="cart_item card flex-space-around">
                    <input type="checkbox" name="" id="">
                    <img src="/package/{{$cart->image}}" alt="" class="cart_item-img">
                    <div class="cart_item-description">
                        <h3 class="product_name">{{$cart->package_title}}</h3>
                        <h4 class="product_price">{{$cart->package_title}}</h4>
                        <p class="cart_item-shipping">Free Shipping</p>
                    </div>
                    <div class="cart_item-actions">
                        <button class="btn">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <div>
                            <button class="btn">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <span>{{$cart->quantity}}</span>
                            <button class="btn">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                @endforeach
                
            </div>
            <div class="cart_payment">
                <div class="cart_payment-summary card">
                    <h2>Payment Summary</h2>
                    <div>
                        <p>Subtotal:</p>
                        <p>$341.99</p>
                    </div>
                    <div>
                        <p>Shipping Cost:</p>
                        <p>$2.00</p>
                    </div>
                    <div>
                        <p>Total Cost:</p>
                        <p>$344.99</p>
                    </div>
                    <div>
                        <button class="btn cart_payment-btn">
                            Pay Now
                        </button>
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