@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/cart.css">
@endsection

@section('header')
    @include('layout.navbar')
@endsection

@section('main')
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
@endsection

