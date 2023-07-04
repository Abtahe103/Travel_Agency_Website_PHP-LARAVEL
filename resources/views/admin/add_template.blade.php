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
                        <h2 class="font_size">Add Template</h2>
                        <form action="{{url('/add_template')}}" method="post" enctype="multipart/form-data">
                            
                        @csrf

                        <div class="div_design">
                            <label>Heading : </label>
                            <input type="text" name="heading" placeholder="Heading" required>
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
                            <label>Image : </label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="div_design">
                    
                            <input type="submit" value="Add Template" class="btn btn-primary">
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