<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    public function showSuboptions($id)
    {
        $suboptions = DB::table('suboptions')->where('option_id', $id)->get();

        return view('suboptions', ['suboptions' => $suboptions]);
    }

}