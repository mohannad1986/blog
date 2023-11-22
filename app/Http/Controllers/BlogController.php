<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    // public function index3(): View
    // {
    //     return view('blog.visitor.homelive');
    // }

    public function mohameklive(): View
    {
        return view('blog.visitor.hom-mohamek');
    }

    public function mohamek_not_live(): View
    {
        $posts=Post::all();
        $categories=Category::all();
        return view('blog.visitor.mohamek-not-live.hom-mohamek-not-live',compact('posts','categories'));
    }

    public function mohamek_postcategory($id)
    {
        $posts = Post::where('category_id', $id)->get();
        $categories=Category::all();


         return view('blog.visitor.mohamek-not-live.hom-mohamek-not-live',compact('posts','categories'));

    }

    public function getnews($id){

        $post=Post::FindOrFail($id);

        return view('blog.visitor.mohamek-not-live.singlenews',compact('post'));

    }

    public function searchword(Request $request){

        $categories=Category::all();
        $word=$request->keyword;

        $posts = Post::whereHas('keywords', function ($query) use ($word) {
            $query->where('word','LIKE',"%{$word}%");
        })->get();

        return view('blog.visitor.mohamek-not-live.hom-mohamek-not-live',compact('posts','categories'));

    }
}
