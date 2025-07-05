@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/grid.css">
@endsection

@section('header-style')
    style="background-image: url('package/{{ $template->image }}');"
@endsection

@section('header')
    @include('layout.navbar')
    <div class="caption center">
        <h1>{{$template->heading}}</h1>
    </div>
@endsection

@section('main')
<div class="card-container">
            <?php $serial_count=1 ?>
            @foreach($package as $item)
                <div class="card">
                    <a href="{{ url('/package_description', $item->id) }}">
                        <div class="card-head">
                            <div class="card-serial">
                                <h1><?php echo $serial_count ?></h1>
                            </div>
                            <div class="card-title">
                                <p>{{ $item->title1 }}</p>
                            </div>
                            <div class="rating">
                                <i class="fa-solid fa-star star">&nbsp;</i>{{ $item->rating }}
                            </div>
                        </div>
                        <div class="card-body">
                            <img src="package/{{ $item->image }}">
                        </div>
                        <div class="card-footer">
                            <div class="clock">
                                <i class="fa-solid fa-clock icon-clock"></i>&nbsp;{{ $item->tour_length }}
                            </div>
                            <div class="location">
                                <i class="fa-solid fa-location-dot icon-location"></i>&nbsp;{{ $item->location }}
                            </div>
                            <div class="price">
                                <div><i class="fa-solid fa-bangladeshi-taka-sign"></i>&nbsp;<del>{{ $item->price }}</del>&nbsp;</div>
                                <div><i class="fa-sharp fa-solid fa-bangladeshi-taka-sign taka">&nbsp;{{ $item->discount_price }}</i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $serial_count=$serial_count + 1 ?>
            @endforeach
            </div>
@endsection

@section('footer')
    @include('layout.footer')
@endsection