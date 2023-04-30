<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    public function showSuboptions($id)
    {
        $option = Option::findOrFail($id);
        $suboptions = DB::table('suboptions')->where('option_id', $id)->get();

        return view('categories.suboptions', compact('option', 'suboptions'));
    }

}