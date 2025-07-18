<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $post = Post::find(3);

        dd($post->category->title);

        /* $post->delete(); */

        /* $post->update(
            [
                'title' => 'prueba title',
                'slug' => 'prueba slug'
            ]
        ); */

        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::get();

        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create(
            [
                'category_id' => request()->get('category_id'),
                'title' => request()->get('title'),
                'slug' => request()->get('slug'),
                'content' => request()->get('content'),
                'description' => request()->get('description'),
                'posted' => request()->get('posted'),
                'image' => ''
            ]
        );

        return to_route('post.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
