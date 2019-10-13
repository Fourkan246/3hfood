<?php

namespace App\Http\Controllers;

use App\FoodPackage;
use Illuminate\Http\Request;

class pages_controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $packages = FoodPackage::orderBy('id', 'desc')->where('status','1')->get();
        return view('member/pages/index')->with('packages', $packages);
    }

    public function contact()
    {
      return view('contact');
    }

    public function willcreate()
    {
      return view('willcreate');
    }

    public function packages()
    {
        $packages = FoodPackage::orderBy('id', 'desc')->get();
        return view('packages.packages')->with('packages', $packages);
    }
}
