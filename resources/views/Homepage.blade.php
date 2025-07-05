@extends('layout.default_layout')
@section('head')
<link rel="stylesheet" href="css/Homepage.css">
@endsection
@section('header')
    @include('layout.navbar')
    <div class="caption center">
        <h1>It's time for new</h1>
        <p>ADVENTURE</p>
    </div>
@endsection
        
   
@section('main')
    <h2 class="section-title center">Top Destinations</h2>
    <section class="top-destinations">
            
        <div class="destinations">

            <a href="grid?country=Bangladesh"  class="destination ban">BANGLADESH</a>
            <a href="grid?country=india" class="destination ind">INDIA</a>
            <a href="grid?country=China"  class="destination chi">CHINA</a> 
            <a href="grid?country=Maldives"  class="destination maldi">MALDIVES</a>
            <a href="grid?country=Thailand"  class="destination thai">THAILAND</a> 
            <a href="grid?country=Bhutan"  class="destination bhu">BHUTAN</a> 
            <a href="grid?country=Nepal"  class="destination nep">NEPAL</a> 
            <a href="grid?country=Malaysia"  class="destination malay">MALAYSIA</a>
            <a href="grid?country=Singapur"  class="destination sing">SINGAPUR</a>
                            
        </div>
    </section>
    <p class="section-title-package">Tour Package On <span class="last-word">Sale</span></p>
    <section class="tour-packages">
        <div class="row">
        
            @foreach($package as $index => $packageItem)
                @if($packageItem->package_type=='Special')
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
                    
                @endif
                
            @endforeach
        </div>
        
    </section>
@endsection

@section('footer')
    @include('layout.footer')
@endsection