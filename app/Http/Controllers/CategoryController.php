<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Option;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index()
    {
        //$categories = DB::table('categories')->orderBy('name')->limit(3)->get();

        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /*public function showOptions($id)
    {
    $category = Category::find($id);
    $options = Option::where('category_id', $id)->get();
    return view('categories.options', compact('category', 'options'));
    }
    */
    public function showOptions($id)
    {
        $category = Category::find($id);
        $options = DB::table('options')->where('category_id', $id)->orderBy('name')->limit(3)->get();

        return view('categories.options', ['options' => $options]);
    }

}