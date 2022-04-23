<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'desc')->paginate(13);
        return view('admin.tag.index' ,compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $request->validated();
        try {
            Tag::create($request->all());
            return redirect()->route('tags.index')->with('info', 'Tags Added Successfully');

        } catch (\Exception$e) {
            return $e;
            return redirect()->route('tags.index')->with('error', 'Tags add failed');
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit')->with([
            'tag' => Tag::find($tag->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $data = $request->validated();
        try {
            $tag->fill($data);
            $tag->save();
            return redirect()->route('tags.index')->with('info', 'Tags Updated Successfully');

        } catch (\Exception$e) {
            return $e;
            return redirect()->route('tags.index')->with('error', 'Tags update failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        try {
            Tag::destroy($tag->id);
            return redirect()->route('tags.index')->with('warning', 'Tag deleted successfully');
        } catch (\Exception$e) {
            // return $e;
            return redirect()->route('tags.index')->with('error', 'Tag deleted failed');
        }
    }
}
