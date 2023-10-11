<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
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

       Category::create($attributes);

        return redirect(route('admin.category.index'))->with('success', 'Kategoria została utworzona');
    }

    public function update(Category $category){

// dd(request());
        $attributes = request()->validate([
            'name' => 'required',
            
        ]);
        

        $category->update($attributes);


        return redirect(route('admin.category.index'))->with('success', 'Kategoria została zaktualizowana');

    }
    public function destroy(Category $category)
    {
        
        $tags = $category->tags;
    
      
        foreach ($tags as $tag) {
            $tag->update(['category_id' => null]);
        }
    
       
        $category->delete();
    
        return back()->with('success', 'Kategoria została usunięta, a tagi mają teraz kategorię NULL');
    }
}