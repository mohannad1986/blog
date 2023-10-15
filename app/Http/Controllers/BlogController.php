<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Post;


class BlogController extends Controller
{
    public function index1(): View
    {
        return view('pages.blog.index');
    }

    public function index()
    {
        $today = new \DateTime();

        return view('blog.visitor.home', [
            'posts'  => Post::where('featured', 0)
                // ->whereNotNull('published_at')
                // ->where('published_at', '<=', $today)
                // ->latest()
                ->take(3)
                ->get(),
        ]);

    }
}
