<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\FoodPackage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

   /* public function __construct()
    {
        //$this->middleware('auth');
    }*/


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()) {
            //return 'hello';
            $packages = FoodPackage::orderBy('id', 'desc')->where('status','1')->get();
            return view('member/pages/index')->with('packages', $packages);
        } else {

            $packages = FoodPackage::orderBy('id', 'desc')->where('status','1')->get();
            return view('member/pages/index')->with('packages', $packages);

            //return 'hello';
            //return view('member.pages.index');
        }

        //return view('home');
    }
}
