<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
      @include('admin.css')
      <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size
        {
            font-size:30px;
            padding-bottom:40px;
        }

        label
        {
            display: inline-block;
            width: 150px;
        }

        .div_design
        {
            padding-bottom: 15px;
        }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
      
      <!-- header -->
            @include('admin.header')    
        <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    @if(session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                        {{session()->get('message')}}

                    </div>

                    @endif
                    
                    <div class="div_center">
                        <h2 class="font_size">Update Package</h2>
                        <form action="{{url('/update_package_confirm',$package->id)}}" method="post" enctype="multipart/form-data">
                            
                            @csrf

                        <div class="div_design">
                            <label>Package Title 1 : </label>
                            <input type="text" name="title1" placeholder="Title1" required value="{{$package->title1}}">
                        </div>
                        <div class="div_design">
                            <label>Package Title 2 : </label>
                            <input type="text" name="title2" placeholder="Title2" required value="{{$package->title2}}">
                        </div>
                        <div class="div_design">
                            <label>Rating : </label>
                            <input type="number" name="rating" placeholder="Rating" required value="{{$package->rating}}">
                        </div>
                        <div class="div_design">
                            <label>Price : </label>
                            <input type="number" name="price" min="0" placeholder="Price" required value="{{$package->price}}">
                        </div>
                        <div class="div_design">
                            <label>Discount Price : </label>
                            <input type="number" name="discount_price" min="0" placeholder="Discount Price" required value="{{$package->discount_price}}">
                        </div>
                        <div class="div_design">
                            <label>Current Image : </label>
                            <img style="margin: auto;" height="100px" width="100px" src="/package/{{$package->image}}" alt="">
                        </div>
                        <div class="div_design">
                            <label>Change Image : </label>
                            <input type="file" name="image">
                        </div>
                        <div class="div_design">
                    
                            <input type="submit" value="Update Package" class="btn btn-primary">
                        </div>
                       </form>
                        
                    </div>
                </div>
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>