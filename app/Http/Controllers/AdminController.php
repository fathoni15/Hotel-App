<?php

namespace App\Http\Controllers;

use App\Models\LogActivities;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function log()
    {
        $log = LogActivities::all();
        return view('admin.log', compact('log'));
    }
}
