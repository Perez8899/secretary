<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailableController extends Controller
{
    public function showAvailable()
    {

        return view('categories.available');
    }
}