<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminTagsController extends Controller
{
    public function index()
    {


        $tags = Tag::all();
        $categories = Category::all();

        return view('admin.tag.index', ['tags' => $tags, 'categories' => $categories]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'category_id' => ['required'],

        ]);



        $tag = Tag::create($attributes);


        return redirect(route('admin.tag.index'))->with('success', 'Post został dodany');
    }

    public function update(Tag $tag)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);


        $tag->update($attributes);


        return redirect(route('admin.tag.index'))->with('success', 'Kategoria została zaktualizowana');
    }
    public function destroy(Tag $tag)
    {
        $tag->posts()->detach();
        $tag->delete();


        
        return back()->with('success', 'Tag została usunięta, a tagi mają teraz kategorię NULL');
    }
}
