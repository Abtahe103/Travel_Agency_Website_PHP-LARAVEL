<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\package_sale;

use App\Models\all_packages;

use App\Models\booking;

use App\Models\Register;

use App\Models\cart;

class AdminController extends Controller
{
    public function view_package()
    {
        return view('admin.package');
    }

    public function add_package(Request $request)
    {
        $package = new package_sale;
        //variable = new model_name

        $package->title1=$request->title1;
        $package->title2=$request->title2;
        $package->rating=$request->rating;
        $package->price=$request->price;
        $package->discount_price=$request->discount_price;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('package',$imagename);
    
            $package->image=$imagename;
    
        }

       
        $package->save();

        return redirect()->back()->with('message','Package Added Successfully');


    }

    public function show_package()
    {
        $package = package_sale::all();
        return view('admin.show_package',compact('package'));
    }

    public function delete_package($id)
    {
        $package = all_packages::find($id);

        $package->delete();

        return redirect()->back()->with('message','Package deleted Successfully');
    }

    public function update_package($id)
    {
        $package=package_sale::find($id);
        return view('admin.update_package',compact('package'));
    }

    public function update_package_confirm(Request $request,$id)
    {
        $package=package_sale::find($id);

        $package->title1=$request->title1;
        $package->title2=$request->title2;
        $package->rating=$request->rating;
        $package->price=$request->price;
        $package->discount_price=$request->discount_price;
        $package->title1=$request->title1;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('package',$imagename);

            $package->image=$imagename;
        }

        $package->save();

        return redirect()->back()->with('message','Package updated Successfully');

    }

    public function view_all_package()
    {
        return view('admin.all_package');
    }

    public function add_all_package(Request $request)
    {
        $package = new all_packages;
        //variable = new model_name

        $package->title1=$request->title1;
        $package->location=$request->location;
        $package->country=$request->country;
        $package->package_type=$request->package_type;
        $package->tour_length=$request->tour_length;
        $package->tour_description=$request->tour_description;
        $package->rating=$request->rating;
        $package->price=$request->price;
        $package->discount_price=$request->discount_price;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('package',$imagename);
    
            $package->image=$imagename;
    
        }

        $package->save();

        return redirect()->back()->with('message','Package Added Successfully');

    }

    public function show_all_package()
    {
        $package = all_packages::all();
        return view('admin.show_all_package',compact('package'));
    }
    
    public function update_all_package($id)
    {
        $package=all_packages::find($id);
        return view('admin.update_all_package',compact('package'));
    }

    public function update_all_package_confirm(Request $request,$id)
    {
        $package=all_packages::find($id);

        $package->title1=$request->title1;
        $package->location=$request->location;
        $package->country=$request->country;
        $package->package_type=$request->package_type;
        $package->tour_length=$request->tour_length;
        $package->tour_description=$request->tour_description;
        $package->rating=$request->rating;
        $package->price=$request->price;
        $package->discount_price=$request->discount_price;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('package',$imagename);

            $package->image=$imagename;
        }

        $package->save();

        return redirect()->back()->with('message','Package updated Successfully');

    }

    public function booking()
    {
        $username = session('user');
        $user = Register::where('username', $username)->first();
        
        $userid = $user->id;

        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $booking = new booking;
            $booking->name=$data->name;
            $booking->email=$data->email;
            $booking->user_id=$data->user_id;
            $booking->package_title=$data->package_title;
            $booking->price=$data->price;
            $booking->quantity=$data->quantity;
            $booking->image=$data->image;
            $booking->package_id=$data->package_id;
            $booking->payment_status='cash on delivery';

            $booking->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back();
    }
    
}