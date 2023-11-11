<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {

        $posts = Post::with('category', 'tags')->orderByDesc('id')->get();
        $videos = Video::with('category', 'tags')->orderByDesc('id')->get();


        $newestPost = $posts->first();
        $latestPosts = $posts->skip(1)->take(3)->all();

        return view('pages.index', ['posts' => $posts, 'videos' => $videos, 'newestPost' => $newestPost, 'latestPosts' => $latestPosts]);
    }


    public function posts()
    {

        $posts = Post::with('category', 'tags')->orderByDesc('id')->get();


        $newestPost = $posts->first();
        $latestPosts = $posts->skip(1)->take(3)->all();

        return view('pages.posts', ['posts' => $posts, 'newestPost' => $newestPost, 'latestPosts' => $latestPosts]);
    }
    public function post(Post $post)
    {
        return (view('pages.post', ['post' => $post]));
    }

    public function category(Category $category)
    {
        $posts = Post::with('category')->where('category_id', $category->id)->get();
        $newestPost = $posts->first();
        $latestPosts = $posts->skip(1)->take(3)->all();

        return view('pages.posts', ['posts' => $posts, 'newestPost' => $newestPost, 'latestPosts' => $latestPosts]);
    }
    public function tag(Tag $tag)
    {
        $posts = Post::with('tags')->where('tag_id', $tag->id)->get();

        $newestPost = $posts->first();
        $latestPosts = $posts->skip(1)->take(3)->all();
        return view('pages.posts', ['posts' => $posts, 'newestPost' => $newestPost, 'latestPosts' => $latestPosts]);
    }
}
