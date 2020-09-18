<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
class CategoryController extends Controller
{
    //
    public function index()
    {
        $category=Item::where('category','like','Wire')->paginate(5);
        return view('category',compact('category'));
    }

    public function  detail($id)
    {
        $category = Item::where('id', $id)->firstOrFail();
        return view('categoryDetail', ['category' => $category]);
    }
}
