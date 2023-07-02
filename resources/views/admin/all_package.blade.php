<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
        width: 50%;
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
                        <h2 class="font_size">Add Package</h2>
                        <form action="{{url('/add_all_package')}}" method="post" enctype="multipart/form-data">
                            
                        @csrf

                        <div class="div_design">
                            <label>Package Title 1 : </label>
                            <input type="text" name="title1" placeholder="Title1" required>
                        </div>
                        <div class="div_design">
                            <label>location : </label>
                            <input type="text" name="location" placeholder="location" required>
                        </div>
                        <div class="div_design">
                            <label>Country</label>
                            <select name="country" required>
                                <option value="" selected="">Select country</option>
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
                            <label>Package type</label>
                            <select name="package_type" required>
                                <option value="" selected="">Select type</option>
                                <option>Normal</option>
                                <option>Special</option>
                            </select>
                        </div>
                        <div class="div_design">
                            <label>Tour Length : </label>
                            <input type="text" name="tour_length" placeholder="Tour Length" required>
                        </div>
                        <div class="div_design">
                            <label for="paragraph-input">Package Description:</label>
                            <textarea id="paragraph-input" name="tour_description" placeholder="Type tour description here..." rows="4"></textarea>
                        
                        </div>
                        <div class="div_design">
                            <label>Rating : </label>
                            <input type="number" name="rating" placeholder="Rating" required>
                        </div>
                        <div class="div_design">
                            <label>Price : </label>
                            <input type="number" name="price" min="0" placeholder="Price" required>
                        </div>
                        <div class="div_design">
                            <label>Discount Price : </label>
                            <input type="number" name="discount_price" min="0" placeholder="Discount Price" required>
                        </div>
                        <div class="div_design">
                            <label>Image : </label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="div_design">
                    
                            <input type="submit" value="Add Package" class="btn btn-primary">
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