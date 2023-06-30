<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\package_sale;

use App\Models\all_packages;

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
        $package = package_sale::find($id);

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
    
}