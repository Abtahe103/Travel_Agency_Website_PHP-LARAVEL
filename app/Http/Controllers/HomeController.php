<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\package_sale;

use App\Models\all_packages;

class HomeController extends Controller
{
    public function index()
    {
        $package=package_sale::all();
        return view('Homepage',compact('package'));

    }

    public function package_description($id)
    {
        $package=all_packages::find($id);
        return view('package_description',compact('package'));

    }
    public function index2()
    {
        $country = request()->query('country');
        $package = all_packages::where('country', $country)->get();
        return view('india', compact('package'));
    }

}
