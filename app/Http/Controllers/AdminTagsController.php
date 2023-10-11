<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class AdminTagsController extends Controller
{
    public function index(){


        $tags = Tag::all();
       
               return view('admin.tag.index',['tags'=>$tags,]);
           }

           public function store()
           {
       
               $attributes = request()->validate([
                   'name' => 'required',
                   'category_id' => ['required'],
                  
               ]);
       
               
       
               $tag = Tag::create($attributes);
       
               $tag->tags()->attach(request()->input('tags'));
       
               return redirect(route('admin.tag.index'))->with('success', 'Post został dodany');
}
}