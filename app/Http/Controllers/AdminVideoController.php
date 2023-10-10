<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminVideoController extends Controller
{
    public function index()
    
    {
        $videos = Video::all();

        return view('admin.allVideos', ['videos' => $videos]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.video.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store()
    {

// dd(request()->all());
        
        $attributes = request()->validate([
            'title' => 'required',
            'category_id' => ['required'],
            'thumbnail' => ['required', 'image'],
            'link' => ['required']
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('video-thumbnails', 'public');
        $attributes['slug'] = Str::slug(request()->title);

        $video = Video::create($attributes);

        $video->tags()->attach(request()->input('tags'));

        return redirect(route('admin.video.index'))->with('success', 'Video zostało dodane');
    }

    public function edit(Video $video)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return (view('admin.video.edit', ['video' => $video, 'categories' => $categories, 'tags' => $tags]));
    }

    public function update(Video $video)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'category_id' => ['required'],
            'link' => ['required']
        ]);
        if (request()->hasFile('thumbnail')) {

            if ($video->thumbnail) {
                Storage::disk('public')->delete($video->thumbnail);
            }

            $attributes['thumbnail'] = request()->file('thumbnail')->store('video-thumbnails', 'public');
        }

        if (request()->title) {
            $attributes['slug'] = Str::slug(request()->title);;
        }

        $video->update($attributes);


        return redirect(route('admin.video.index'))->with('success', 'Miniaturka video została zmieniona');
    }


    public function destroy(Video $video)
    {
        $video->tags()->detach();


        $video->delete();

        return back()->with('success', 'Miniaturka wideo została usunięta');
    }
}
