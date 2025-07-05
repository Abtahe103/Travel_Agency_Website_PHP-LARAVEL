<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      /* Make sure the whole page background is white */
      body,
      .container-scroller,
      .main-panel,
      .content-wrapper {
          background-color: rgb(235, 235, 235);
      }

      /* Container centering */
      .div_center {
          max-width: 600px;   /* control form width */
          margin: 40px auto;  /* vertical 40px, horizontally centered */
          padding: 30px;
          background: #fff;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
          text-align: center;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      /* Title */
      .font_size {
          font-size: 32px;
          margin-bottom: 30px;
          font-weight: 600;
          color: #333;
      }

      /* Label styling */
      label {
          display: block;
          text-align: left;
          font-weight: 600;
          margin-bottom: 8px;
          color: #444;
          font-size: 16px;
      }

      /* Input container for spacing */
      .div_design {
          margin-bottom: 20px;
          text-align: left;
      }

      /* Inputs and select styling */
      input[type="text"],
      select,
      input[type="file"] {
          width: 100%;
          padding: 12px 15px;
          border: 1.5px solid #ccc;
          border-radius: 6px;
          font-size: 16px;
          transition: border-color 0.3s ease;
          outline: none;
          box-sizing: border-box;
      }

      /* Input focus effect */
      input[type="text"]:focus,
      select:focus,
      input[type="file"]:focus {
          border-color: #007bff;
          box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
      }

      /* Submit button styling */
      input[type="submit"] {
          width: 100%;
          padding: 14px 0;
          background-color:rgb(255, 145, 0);
          border: none;
          border-radius: 8px;
          color: #fff;
          font-size: 18px;
          font-weight: 700;
          cursor: pointer;
          transition: background-color 0.3s ease, box-shadow 0.3s ease;
          /* box-shadow: 0 4px 12px rgb(255, 145, 0); */
      }

      input[type="submit"]:hover {
          background-color:rgb(255, 208, 0);
          /* box-shadow: 0 6px 18px rgb(255, 217, 0); */
      }

      /* Responsive adjustments */
      @media (max-width: 600px) {
          .div_center {
              margin: 20px 15px;
              padding: 20px;
          }
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
                <label for="heading">Heading:</label>
                <input id="heading" type="text" name="heading" placeholder="Heading" required>
              </div>
              
              <div class="div_design">
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                  <option value="" selected>Select country</option>
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
                <label for="image">Image:</label>
                <input id="image" type="file" name="image" required>
              </div>

              <div class="div_design">
                <input type="submit" value="Add Template" class="btn btn-primary">
              </div>

            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
