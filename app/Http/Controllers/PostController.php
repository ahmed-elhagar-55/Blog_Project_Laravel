<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::paginate();
        return view("posts.index",['posts'=>$posts]);
    }

    public function home()
    {
        $posts=Post::paginate();
        return view("home",['posts'=>$posts]);
    }

    public function search(Request $request)
    {

        $query=$request->input('query');
        $posts=Post::where('description','LIKE','%'.$query.'%')->get();
        return view('posts.search',['posts'=>$posts]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view("posts.add",["users"=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // dd($request->all());

        $post=[
            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>$request->user_id,
        ];
        Post::create($post);
        return redirect()->route("posts.index")->with("success","Post Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::findOrFail($id);
        return view("posts.show_post",["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findOrFail($id);
        $users=Post::all();
        return view("posts.edit",["post"=>$post,"users"=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, string $id)
    {
        // $post=Post::findOrFail($id);

        $newPost=[
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id,
        ];
        Post::where('id',$id)->update($newPost);
        return redirect()->route('posts.index')->with('success','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post Deleted Successfully');
    }
}
