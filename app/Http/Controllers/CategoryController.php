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

        //we store the result of the table query by means of the model,
        //where the field value is equal to true
        $showCategories = Available::where('config', true)->first();

        if ($showCategories) { //if the value is true show the view
            $categories = Category::all();
            return view('categories.index', compact('categories'));
        } else { //if the value is false show the available view
            return view('categories.available');
        }

    }


    public function showOptions($id)
    {
        $options = DB::table('options')->where('category_id', $id)->orderBy('name')->limit(3)->get();

        return view('categories.options', ['options' => $options]);
    }


}