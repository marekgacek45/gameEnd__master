<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
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
}
