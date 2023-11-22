<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\User;
use Egulias\EmailValidator\Parser\Comment;

use Illuminate\Support\Facades\Hash;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $user =user::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->name),
        'roles_name'=>["commenter"],
        'Status'=>'0',
       ]);
       $user->assignRole('4');
       $user_id = user::latest()->first()->id;

       Comments::create([
             'content'=>$request->content,
             'user_id'=>$user_id,
             'post_id'=>$request->post_id,


       ]);
       toastr()->success('comment added successsfully');

       return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
