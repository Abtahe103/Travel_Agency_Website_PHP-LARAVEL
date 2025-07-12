<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedia</title>
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
</head>
<body>
<section class="tour-packages">
    <?php $country='Bangladesh' ?>
        <p class="section-title-package">Bangladesh</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 8 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='India' ?>
        <p class="section-title-package">India</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        @if(($index + 1) % 8 === 0)
                            </div>
                            <div class="row">
                        @endif
                        
                    @endif
                    
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='China' ?>
        <p class="section-title-package">China</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 16 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Maldives' ?>
        <p class="section-title-package">Maldives</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 32 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Thailand' ?>
        <p class="section-title-package">Thailand</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 64 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Bhutan' ?>
        <p class="section-title-package">Bhutan</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 128 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Nepal' ?>
        <p class="section-title-package">Nepal</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 8 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Malaysia' ?>
        <p class="section-title-package">Malaysia</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 8 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>

<section class="tour-packages">
    <?php $country='Singapur' ?>
        <p class="section-title-package">Singapur</p>
            <div class="row">
            
                @foreach($package as $index => $packageItem)
                    @if($packageItem->country==$country)
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
                        
                        @if(($index + 1) % 8 === 0)
                            </div>
                            <div class="row">
                        @endif
                    @endif
                @endforeach
            </div>
</section>


</body>
</html>

</body>
</html>