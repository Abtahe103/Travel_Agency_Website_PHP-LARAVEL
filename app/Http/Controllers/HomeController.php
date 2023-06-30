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

    public function index2()
    {
        $package=all_packages::all();
        return view('india',compact('package'));

    }
}
