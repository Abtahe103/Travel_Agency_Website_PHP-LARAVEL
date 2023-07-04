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

        .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        }

        textarea {
        width: 15%;
        height: 100px;
        padding: 10px;
        resize: vertical;
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
                        <form action="{{url('/update_all_package_confirm',$package->id)}}" method="post" enctype="multipart/form-data">
                            
                        @csrf

                        <div class="div_design">
                            <label>Package Title 1 : </label>
                            <input type="text" name="title1" placeholder="Title1" required value="{{$package->title1}}">
                        </div>
                        <div class="div_design">
                            <label>location : </label>
                            <input type="text" name="location" placeholder="location" required value="{{$package->location}}">
                        </div>
                        <div class="div_design">
                            <label>Country</label>
                            <select name="country">
                                <option value="{{$package->country}}" selected="{{$package->country}}">{{$package->country}}</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Nepal</option>
                                <option>Bhutan</option>
                                <option>Thailand</option>
                                <option>China</option>
                                <option>Maldives</option>
                                <option>Singapur</option>
                                <option>Malaysia</option>
                            </select>
                        </div>
                        <div class="div_design">
                            <label>Package Type</label>
                            <select name="package_type">
                                <option value="{{$package->package_type}}" selected="{{$package->package_type}}">{{$package->package_type}}</option>
                                <option>Normal</option>
                                <option>Special</option>
                                
                            </select>
                        </div>
                        <div class="div_design">
                            <label>Tour Length : </label>
                            <input type="text" name="tour_length" placeholder="Tour Length" required value="{{$package->tour_length}}">
                        </div>
                        <div class="div_design">
                            <label for="paragraph-input">Package Description:</label>
                            <textarea id="paragraph-input" name="tour_description" placeholder="Type tour description here..." rows="4" >{{$package->tour_description}}</textarea>
                        
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