<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('posts.index', ['posts' => $posts], ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve the user ID of the currently logged-in user
        $userId = Auth::id();

        return view('posts.create', ['userId' => $userId]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title     = $request->title;
        $post->summary   = $request->summary;
        $post->content   = $request->content;
        $post->user_id   = $request->user_id;
        $post->save();

        return redirect()->route('overzicht-berichten');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id', $id)->first();

        $data = [
            'post' => $post
        ];

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    { 
        $post = Post::where('id', $id)->first();

        $data = [
            'post' => $post
        ];
        // $sql = $post->toSql(); // Get the raw SQL statement


        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->all());
        $post->title     = $request->title_post;
        $post->summary   = $request->summary_post;
        $post->content   = $request->content_post;
        $post->user_id   = $request->user_id_post;
        $post->save();



        return redirect()->route('posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
