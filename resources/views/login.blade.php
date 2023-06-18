<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
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
            <div>
                    <a href="#" class="log-in">Log In</a>
                    <i class="fa-solid fa-cart-shopping cart"></i>
            </div>
        
        
        </nav>
        <header class="overlay">
        <div class="wrapper">
            <div class="form-box">
                <div class="box-item">
                    @if(Session::has('error'))
                        <div class="alert-danger" role="alert">
                            {{Session::get('error')}}
                        </div>
                    @endif
                    <h2>Login</h2>
                    <form action="/login.html" method="post">
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
                            <p>Don't have an account?<a href="register.html" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </header>
    <main>
        
    </main>
</body>
</html>