<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $imageName = $request->image->store('posts');

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'picture' => $imageName
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre post a été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

 


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {

        if (! Gate::allows('update-post', $post)) {
            abort(403);
        }

        $arrayUpdate = [
            'title' => $request->title,
            'content' => $request->content
        ];

        if ($request->image != null) {
            $imageName = $request->image->store('posts');


            $arrayUpdate = array_merge($arrayUpdate, [
                'picture' => $imageName
            ]);
        }

        $post->update($arrayUpdate);

        return redirect()->route('dashboard')->with('success', 'Votre post a été modifié');
    }

    public function destroy(Post $post)
    {
        if (Gate::denies('destroy-post', $post)) {
            abort(403);
        }

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Votre post a été supprimé');
    }
}
