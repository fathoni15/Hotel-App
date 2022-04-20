<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            return redirect()->route('admin.home');
        }
        elseif(auth()->user()->role == 'receptionis'){
            return redirect()->route('receptionis.home');
        }
        elseif(auth()->user()->role == 'customer'){
            return redirect()->route('customer.home');
        }
    }
}
