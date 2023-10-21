<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        $posts=Post::all();
        return view('blog.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('blog.post.create', [
            'tags'          => Tag::all(),
            'categories'    => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //    var_dump($tagIds);



        // $intArray = array_map('intval',$request->tags);

        // return $intArray;


        $post                   = new Post;
        $post->title            = $request->title;
        $post->slug             = Str::slug($request->title);
        $post->body             = $request->body;
        $post->author_id        = Auth::user()->id;
        // $post->author_id        = '3';
        $post->category_id      = $request->category_id;
        $post->published_at     = $request->published_at;
        $post->meta_description = $request->meta_description;

        if ($request->hasFile('cover_image')) {
            $image          = $request->file('cover_image');
            $imageName      = $image->getClientOriginalName();
            $imageNewName   = explode('.', $imageName)[0];
            $fileExtention  = time() . '.' . $imageNewName . '.' . $image->getClientOriginalExtension();
            $location       = storage_path('app/public/images/' . $fileExtention);

            Image::make($image)->resize(1200, 630)->save($location);

            $post->cover_image = $fileExtention;
        };

        $post->save();
        // $tagy=explode(',',);
        // $post->tags()->attach($request->tags);
        if(!isNull( $request->tags)){
        $tagIds = explode(',', $request->tags[0]);


        $post->tags()->sync($tagIds);
        }

        // return redirect()->route('posts.index')->with('success', 'Post created succesfully!');
        toastr()->success('post added successsfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $post=Post::FindOrFail($id);
        $tags           = Tag::all();
        $categories     = Category::all();
        $oldTags        = $post->tags->pluck('id')->toArray();

        return view('blog.post.edit', compact('post', 'tags', 'categories', 'oldTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request)
    {



        $post=Post:: FindOrFail($request->id);

        $post->title            = $request->title;
        $post->slug             = Str::slug($request->title);
        $post->body             = $request->body;
        // $post->author_id        = Auth::user()->id;
        $post->category_id      = $request->category_id;
        $post->published_at     = $request->published_at;
        $post->meta_description = $request->meta_description;

        if ($request->hasFile('cover_image')) {
            $oldFileName    = $post->cover_image;
            $image          = $request->file('cover_image');
            $imageName      = $image->getClientOriginalName();
            $imageNewName   = explode('.', $imageName)[0];
            $fileExtention  = time() . '.' . $imageNewName . '.' . $image->getClientOriginalExtension();
            $location       = storage_path('app/public/images/' . $fileExtention);
            Image::make($image)->resize(1200, 630)->save($location);
            $post->cover_image = $fileExtention;

            File::delete(storage_path('app/public/images/' . $oldFileName));
        };

        $post->save();

        if(!isNull( $request->tags)){



        $tagIds = explode(',', $request->tags[0]);

        $post->tags()->sync($request->tags);
        }

        toastr()->success('post added updated');

        return redirect()->back();
    }



    public function destroy($id)
    {
        $post=Post::FindOrFail($id);
        File::delete(storage_path('app/public/images/' . $post->cover_image));

        $post->delete();

        toastr()->success('post added updated');

        return redirect()->back();



    }
}
