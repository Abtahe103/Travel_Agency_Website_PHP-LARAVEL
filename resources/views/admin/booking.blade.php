<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      @include('admin.css')
      <style type="text/css">

        .center{
          margin: auto;
          width: 100%;
          border: 2px solid white;
          margin-top: 40px;
        }
        
        .font_size{
          text-align: center;
          padding-top: 20px;
        }

        .img_size{
          height: 100px;
          width: 150px;
        }

        .th_color{
          background-color: rgb(151, 151, 255);
        }

        .th_design{
          border: 1px solid white;
          padding: 10px;
        }

        .td_design{
          border: 1px solid white;
          padding: 10px;
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

              <h2 class="font_size">All Bookings</h2>
                <table class="center">
                   <tr class="th_color">
                      <th class="th_design">Username</th>
                      <th class="th_design">Email</th>
                      <th class="th_design">Package ID</th>
                      <th class="th_design">Package Title</th>
                      <th class="th_design">Price</th>
                      <th class="th_design">quantity</th>
                      <th class="th_design">Payment Status</th>
                      <th class="th_design">Image</th>
                   </tr>
                   
                   @foreach($orders as $orders)

                   <tr>
                      <td class="td_design">{{$orders->name}}</td>
                      <td class="td_design">{{$orders->email}}</td>
                      <td class="td_design">{{$orders->package_id}}</td>
                      <td class="td_design">{{$orders->package_title}}</td>
                      <td class="td_design">{{$orders->price}}</td>
                      <td class="td_design">{{$orders->quantity}}</td>
                      <td class="td_design">{{$orders->payment_status}}</td>
                      <td>
                        <img class="img_size" src="/package/{{$orders->image}}" alt="">
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