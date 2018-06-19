<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $customers = Customer::get();
        $cust = Customer::select('fees')->sum('fees');
        $count = Customer::select('name')->count();
        return view('customer' ,compact('customers','cust','count'));
    }
    
}
