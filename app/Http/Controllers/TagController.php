<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{

    public function index()
    {
        return view('blog.tag.index', [
            'tags' => Tag::all(),
        ]);
    }


    public function create()
    {
        return view('blog.tag.create');
    }


    public function store(TagRequest $request)
    {
        $tag = new Tag([
            'name'  => $request->name(),
            'slug'  => Str::slug($request->name())
        ]);

        $tag->save();

        toastr()->success('tag added successsfully');
        return redirect()->back();

    }

    public function edit($id)
    {
        $tag=Tag::FindOrFail($id);
        return view('blog.tag.edit', compact('tag'));
    }


    public function update(TagRequest $request)

    {

        return $request;
        // $tag=Tag::FindOrFail($id);
        // $tag->update([
        //     'name'  => $request->name(),
        //     'slug'  => Str::slug($request->name()),
        // ]);

        // return redirect()->route('tags.index')->with('success', 'Tag successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag successfully deleted!');
    }
}
