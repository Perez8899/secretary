<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailableController extends Controller
{
    public function showAvailable(Request $request)
    {
       
        return view('categories.available');
    }
}