<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
      /* White background for page and main containers */
      body,
      .container-scroller,
      .main-panel,
      .content-wrapper {
        background-color: #ffffff !important;
        color: #212529 !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      /* Center form container with max width and padding */
      .div_center {
        max-width: 600px;
        margin: 40px auto;
        padding: 30px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: left;
      }

      /* Heading */
      .font_size {
        font-size: 30px;
        padding-bottom: 30px;
        font-weight: 600;
        color: #333;
        text-align: center;
      }

      /* Label styling */
      label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #444;
        font-size: 16px;
      }

      /* Form group spacing */
      .div_design {
        margin-bottom: 20px;
      }

      /* Input, select and textarea styles */
      input[type="text"],
      input[type="number"],
      input[type="file"],
      select,
      textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1.5px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box;
      }

      /* Focus style */
      input:focus,
      textarea:focus,
      select:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        outline: none;
      }

      /* Textarea resizing */
      textarea {
        resize: vertical;
        min-height: 100px;
      }

      /* Submit button */
      input[type="submit"] {
        width: 100%;
        padding: 14px 0;
        background-color: rgb(255, 145, 0);
        border: none;
        border-radius: 8px;
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
      }

      input[type="submit"]:hover {
        background-color: rgb(255, 208, 0);
      }

      /* Image styling */
      .current-image {
        display: block;
        margin: 10px auto;
        border-radius: 8px;
        object-fit: cover;
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
            {{ session()->get('message') }}
          </div>
          @endif

          <div class="div_center">
            <h2 class="font_size">Update Package</h2>
            <form action="{{ url('/update_all_package_confirm', $package->id) }}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="div_design">
                <label>Package Title 1 :</label>
                <input type="text" name="title1" placeholder="Title1" required value="{{ $package->title1 }}">
              </div>

              <div class="div_design">
                <label>Location :</label>
                <input type="text" name="location" placeholder="Location" required value="{{ $package->location }}">
              </div>

              <div class="div_design">
                <label>Country</label>
                <select name="country" required>
                  <option value="{{ $package->country }}" selected>{{ $package->country }}</option>
                  <option>Bangladesh</option>
                  <option>India</option>
                  <option>Nepal</option>
                  <option>Bhutan</option>
                  <option>Thailand</option>
                  <option>China</option>
                  <option>Maldives</option>
                  <option>Singapore</option>
                  <option>Malaysia</option>
                </select>
              </div>

              <div class="div_design">
                <label>Package Type</label>
                <select name="package_type" required>
                  <option value="{{ $package->package_type }}" selected>{{ $package->package_type }}</option>
                  <option>Normal</option>
                  <option>Special</option>
                </select>
              </div>

              <div class="div_design">
                <label>Tour Length :</label>
                <input type="text" name="tour_length" placeholder="Tour Length" required value="{{ $package->tour_length }}">
              </div>

              <div class="div_design">
                <label for="paragraph-input">Package Description:</label>
                <textarea id="paragraph-input" name="tour_description" placeholder="Type tour description here..." rows="4" required>{{ $package->tour_description }}</textarea>
              </div>

              <div class="div_design">
                <label>Rating :</label>
                <input type="number" name="rating" placeholder="Rating" required value="{{ $package->rating }}">
              </div>

              <div class="div_design">
                <label>Price :</label>
                <input type="number" name="price" min="0" placeholder="Price" required value="{{ $package->price }}">
              </div>

              <div class="div_design">
                <label>Discount Price :</label>
                <input type="number" name="discount_price" min="0" placeholder="Discount Price" required value="{{ $package->discount_price }}">
              </div>

              <div class="div_design">
                <label>Current Image :</label>
                <img class="current-image" height="100" width="100" src="/package/{{ $package->image }}" alt="Current Image" />
              </div>

              <div class="div_design">
                <label>Change Image :</label>
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
    </div>
  </body>
</html>
