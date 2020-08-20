<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Posts\CreatePostsRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostsRequest $request)
    {
        // $post = new Post();

        // $post->title = $request->title;
        // $post->description = $request->description;

        // Upload Image
        $image = $request->image->store('posts');

        // $post->image = $request->image;
        // $post->content = $request->content;
        // $post->published_at = $request->published_at;
        // $post->category_id = $request->category;
        // $post->id = (string) Str::uuid();

        // Create the post
        $post = Post::create([
            // 'id' => $post_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'content' => $request->content,
            'published_at' => $request->published_at,
            'category_id' => $request->category,
        ]);

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }

        // Flash message
        session()->flash('success', 'Post created successfully...');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only(['title', 'description', 'published_at', 'content']);

        // Check is new image
        if ($request->hasFile('image')) {
            $image = $request->image->store('posts');
            // Delete old image
            $post->deleteImage();

            $data['image'] = $image;
        }

        // If new tags are updated it will remove the old tags if
        // old tags are no longer needed
        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        $post->update($data);
        session()->flash('success', 'Post updated successfully...');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Will retrieve both regular posts and trashed posts
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {
            $post->deleteImage();
            $post->forceDelete();
            Session()->flash('success', 'Post deleted successfully...');
            return redirect(route('posts.index'));
        } else {
            $post->delete();
        }
        Session()->flash('success', 'Post trashed successfully...');
        return redirect(route('posts.index'));
    }

    /**
     * Display a list of all trashed posts
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->with('posts', $trashed);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();
        $post->restore();
        session()->flash('success', 'Post restored successfully...');
        return redirect()->back();
    }
}
