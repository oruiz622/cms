<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tags\CreateTagsRequest;
use App\Http\Requests\Tags\UpdateTagsRequest;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags.index')->with('tags', Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(CreateTagsRequest $request)
    {
        Tag::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Tag added successfully...');

        return redirect(route('tags.index'));
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
    public function edit(Tag $tag)
    {
        return view('tags.create')->with('Tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagsRequest $request, Tag $tag)
    {
        //        $Tag->name = $request->name;
        //        $category->save();

        // Same as above just shorter
        $tag->update([
            'name' => $request->name
        ]);

        session()->flash('success', 'Tag updated successfully...');

        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if ($tag->posts->count() > 0) {
            session()->flash("error", "Tag cannot be deleted because it still has {$tag->posts->count()} post(s) connected to it.");
            return redirect()->back();
        }

        $tag->delete();
        session()->flash('success', 'Tag deleted successfully...');

        return redirect(route('tags.index'));
    }
}
