<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class AdminPostsController extends Controller
{
  

    public function index()
    {
        $posts = Post::with('category', 'tags')->orderByDesc('id')->paginate(10);

        return view('admin.index', ['posts' => $posts,]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.create', ['categories' => $categories, 'tags' => $tags]);
    }
    public function store()
    {
        
        $attributes = request()->validate([
            'title' => 'required',
            'category_id' => ['required'],
            'thumbnail' => ['required', 'image'],
            'content' => ['required'],
        ]);


        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        $attributes['slug'] = Str::slug(request()->title);

        $post = Post::create($attributes);

        $post->tags()->attach(request()->input('tags'));

        return redirect(route('admin.index'))->with('success', 'Post został dodany');
    }

    public function upload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }


    public function show(Post $post)
    {
        return (view('pages.post', ['post' => $post]));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return (view('admin.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags]));
    }

    public function update(Post $post)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'category_id' => ['required'],
            'content' => ['required']
        ]);
        if (request()->hasFile('thumbnail')) {

            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        if (request()->title) {
            $attributes['slug'] = Str::slug(request()->title);;
        }

        $post->update($attributes);

        $post->tags()->attach(request()->input('tags'));


        return redirect(route('admin.index'))->with('success', 'Post został zmieniony');
    }


    public function destroy(Post $post)
    {
        $post->tags()->detach();


        $post->delete();

        return back()->with('success', 'Post został usunięty');
    }
}
