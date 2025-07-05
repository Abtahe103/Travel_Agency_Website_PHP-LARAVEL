<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      body, 
      .container-scroller, 
      .main-panel, 
      .content-wrapper {
        background-color: rgb(235, 235, 235) !important;
        color: #333 !important;
      }

      .center {
        margin: auto;
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
      }

      .font_size {
        text-align: center;
        padding-top: 20px;
      }

      .img_size {
        height: 100px;
        width: 150px;
      }

      /* Table header with orange background */
      .th_color{
          background-color: rgb(255, 145, 0);
          color: white;
        }

        /* Black borders for all table header cells */
        .th_design{
          border: 1px solid black;
          padding: 10px;
          text-align: left;
          
        }

        /* Black borders for all table body cells */
        .td_design{
          border: 1px solid black;
          padding: 10px;
          vertical-align: top;
          background-color: white;
        }

      .description-content {
        max-height: 60px;
        overflow: hidden;
        transition: max-height 0.3s ease;
      }

      .description-content.expanded {
        max-height: 500px;
      }

      .collapse-btn {
        background: none;
        border: none;
        color: rgb(255, 145, 0);
        cursor: pointer;
        font-weight: bold;
        padding: 0;
        margin-top: 5px;
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
            <button
              type="button"
              class="close"
              data-dismiss="alert"
              aria-hidden="true"
            >
              x
            </button>
            {{ session()->get('message') }}
          </div>
          @endif

          <h2 class="font_size">All Packages</h2>
          <table class="center">
            <tr class="th_color">
              <th class="th_design">Title1</th>
              <th class="th_design">Location</th>
              <th class="th_design">Country</th>
              <th class="th_design">Package Type</th>
              <th class="th_design">Tour Length</th>
              <th class="th_design">Tour Description</th>
              <th class="th_design">Rating</th>
              <th class="th_design">Price</th>
              <th class="th_design">Discount Price</th>
              <th class="th_design">Image</th>
              <th class="th_design">Delete</th>
              <th class="th_design">Edit</th>
            </tr>

            @foreach($package as $package)
            <tr>
              <td class="td_design">{{ $package->title1 }}</td>
              <td class="td_design">{{ $package->location }}</td>
              <td class="td_design">{{ $package->country }}</td>
              <td class="td_design">{{ $package->package_type }}</td>
              <td class="td_design">{{ $package->tour_length }}</td>
              <td class="td_design">
                <div class="description-content" id="desc-{{ $package->id }}">
                  {!! nl2br(e($package->tour_description)) !!}
                </div>
                <button
                  class="collapse-btn"
                  onclick="toggleDescription({{ $package->id }})"
                  id="btn-{{ $package->id }}"
                >
                  Show More
                </button>
              </td>
              <td class="td_design">{{ $package->rating }}</td>
              <td class="td_design">{{ $package->price }}</td>
              <td class="td_design">{{ $package->discount_price }}</td>
              <td>
                <img class="img_size" src="/package/{{ $package->image }}" alt="" />
              </td>
              <td class="td_design">
                <a
                  class="btn btn-danger"
                  onclick="return confirm('Are you sure you want to Delete this data?')"
                  href="{{ url('delete_package', $package->id) }}"
                  >Delete</a
                >
              </td>
              <td class="td_design">
                <a class="btn btn-success" href="{{ url('update_all_package', $package->id) }}">Edit</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <script>
      function toggleDescription(id) {
        const desc = document.getElementById('desc-' + id);
        const btn = document.getElementById('btn-' + id);
        if (desc.classList.contains('expanded')) {
          desc.classList.remove('expanded');
          btn.innerText = 'Show More';
        } else {
          desc.classList.add('expanded');
          btn.innerText = 'Show Less';
        }
      }
    </script>
    <!-- End custom js for this page -->
  </body>
</html>
