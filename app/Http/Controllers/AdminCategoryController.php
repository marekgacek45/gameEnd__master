<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){

 $categories = Category::all();

        return view('admin.category.index',['categories'=>$categories,]);
    }
    public function store(){
        $attributes = request()->validate([
            'name' => 'required',
        ]);

        $category = Category::create($attributes);

        return redirect(route('admin.category.index'))->with('success', 'Kategoria została utworzona');
    }
}
