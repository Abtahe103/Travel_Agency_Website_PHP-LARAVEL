<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
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
            <a href="login.html" class="log-in">Log In</a>
        @endif
        <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
</nav>
        <header class="overlay">
        <div class="wrapper">
            <div class="form-box">
                
                <div class="box-item">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <h2>Registration</h2>
                    <form action="/register.html" method="post">
                        @csrf
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person"></ion-icon>
                            </span>
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" name = "email" required>
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
                            <label><input type="checkbox">&nbsp;I agree to the terms & conditions</label>
                        
                        </div>
                        <button type="submit" class="btn">Register</button>
                        <div class="login-register">
                            <p>Already have an account?<a href="login.html" class="register-link">Login</a></p>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </header>
    <main>
        
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>