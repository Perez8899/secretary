<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Facades\DB;
use App\Models\Available;


class CategoryController extends Controller
{
    public function index()
    {

        $showCategories = Available::where('config', true)->first();

        if ($showCategories) {
            $categories = Category::all();
            return view('categories.index', compact('categories'));
        } else {
            return view('categories.available');
        }

    }


    public function showOptions($id)
    {
        $options = DB::table('options')->where('category_id', $id)->orderBy('name')->limit(3)->get();

        return view('categories.options', ['options' => $options]);
    }


}