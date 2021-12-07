<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tags = Tag::all();
        return view('back.tag.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('back.tag.create');
    }

    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->title = $request->tag_title;
        $tag->save();
        return redirect()->route('tag_index')->with('success_message', 'New tag was created.');
    }

    public function edit(Tag $tag)
    {
        return view('back.tag.edit', ['tag' => $tag]);
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->title = $request->tag_title;
        $tag->save();
        return redirect()->route('tag_index')->with('success_message', 'The tag was edited.');
    }

    public function destroy(Tag $tag)
    {
        $tagTitle = $tag->title;
        $tag->delete();
        return redirect()->route('tag_index')->with('success_message', 'Tag ' . $tagTitle . '  tag was deleted');
    }
}
