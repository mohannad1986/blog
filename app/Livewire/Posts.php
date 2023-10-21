<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
// use Livewire\WithPagination;


class Posts extends Component
{
    // use WithPagination;
    public $category;

    public $allnews=1;

    public $singlenews=0;
    public $postid='12';
    // public $thepost;

    public function render()
    {

        $categories = Category::all();
        $posts = Post::all();
        if($this->category){

            // $posts::category($this->category);
        $posts=Post::where('category_id',$this->category)->get();


        }



            // $posts::category($this->category);

        $thepost=Post::where('id',$this->postid)->get();




        return view('livewire.posts',[
        'posts' => $posts,
        'categories'  => $categories,
        'selectedCategory' => $this->category,
       'allnews'=> $this->allnews,
       'singlenews'=> $this->singlenews,
       'thepost' => $thepost,]

    );
    }


    public function toggleCategory($category): void
    {
        $this->category = $this->category !== $category && $this->categoryExists($category) ? $category : null;
    }

    public function categoryExists($category): bool
    {
        return Category::where('id', $category)->exists();
    }

    public function readPost($postid){

        $this->allnews=0;
        $this->singlenews=1;
        // $this->postid=$postid;
    }



    public function back(){

        $this->allnews=1;
        $this->singlenews=0;

    }
}
