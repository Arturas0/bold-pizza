<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cats = Cat::all();
        return view('back.cat.index', ['cats' => $cats]);
    }

    public function create()
    {
        return view('back.cat.create');
    }

    public function store(Request $request)
    {
        $cat = new Cat;
        $cat->title = $request->cat_title;
        $cat->save();
        return redirect()->route('cat_index')->with('success_message', $cat->title . ' category was created');
    }

    public function edit(Cat $cat)
    {
        return view('back.cat.edit', ['cat' => $cat]);
    }

    public function update(Request $request, Cat $cat)
    {
        $cat->title = $request->cat_title;
        $cat->save();
        return redirect()->route('cat_index')->with('success_message', 'The category was edited.');
    }

    public function destroy(Cat $cat)
    {
        $catTitle = $cat->title;
        $cat->delete();
        return redirect()->route('cat_index')->with('success_message', 'Category ' . $catTitle . ' was deleted.');
    }
}
