<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      @include('admin.css')
      <style type="text/css">

        .center{
          margin: auto;
          width: 70%;
          border: 2px solid white;
          margin-top: 40px;
        }
        
        .font_size{
          text-align: center;
          padding-top: 20px;
        }

        .img_size{
          height: 150px;
          width: 200px;
        }

        .th_color{
          background-color: rgb(151, 151, 255);
        }

        .th_design{
          padding: 30px;
        }

        .td_design{
          padding: 30px;
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

              <h2 class="font_size">All Package</h2>
                <table class="center">
                   <tr class="th_color">
                    <th class="th_design">Title1</th>
                    <th class="th_design">Title2</th>
                    <th class="th_design">Rating</th>
                    <th class="th_design">Price</th>
                    <th class="th_design">Discount Price</th>
                    <th class="th_design">Image</th>
                    <th class="th_design">Delete</th>
                    <th class="th_design">Edit</th>
                   </tr>
                   
                   @foreach($package as $package)

                   <tr>
                    <td class="td_design">{{$package->title1}}</td>
                    <td class="td_design">{{$package->title2}}</td>
                    <td class="td_design">{{$package->rating}}</td>
                    <td class="td_design">{{$package->price}}</td>
                    <td class="td_design">{{$package->discount_price}}</td>
                    <td>
                      <img class="img_size" src="/package/{{$package->image}}" alt="">
                    </td>
                    <td class="td_design">
                      <a class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete this data?')" href="{{url('delete_package',$package->id)}}">Delete</a>
                    </td>
                    <td class="td_design">
                      <a class="btn btn-success" href="{{url('update_package',$package->id)}}">Edit</a>
                    </td>
                   </tr>

                   @endforeach

                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>