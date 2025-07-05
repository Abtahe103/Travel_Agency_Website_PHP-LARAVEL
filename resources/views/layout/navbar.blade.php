<nav class="navbar">
    <a href="Homepage" class="logo"><h1>Expedia</h1></a>
    <ul>
        <li><a href="Homepage">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="packageView">Package</a></li>

        <li><a href="contact">Contact</a></li>
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
            <a href="login" class="log-in">Log In</a>
        @endif
        <a href="{{ url('show_cart') }}"><i class="fa-solid fa-cart-shopping cart"></i></a>
    </div>
</nav>