<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;
use App\Services\PhotoManageService;

class ExtraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $extras = Extra::all();
        return view('back.extra.index', ['extras' => $extras]);
    }

    public function create()
    {
        return view('back.extra.create');
    }

    public function store(Request $request, PhotoManageService $photoManager)
    {
        $extra = new Extra;
        $photoManager->handlePhoto($request, $extra, 'create');

        $extra->title = $request->extra_title;
        $extra->price_s = $request->extra_price_s;
        $extra->price_m = $request->extra_price_m;
        $extra->price_l = $request->extra_price_l;

        $extra->save();
        return redirect()->route('extra_index')->with('success_message', 'New extra was created.');
    }

    public function edit(Extra $extra)
    {
        return view('back.extra.edit', ['extra' => $extra]);
    }

    public function update(Request $request, Extra $extra, PhotoManageService $photoManager)
    {
        $extra->title = $request->extra_title;
        $extra->price_s = $request->extra_price_s;
        $extra->price_m = $request->extra_price_m;
        $extra->price_l = $request->extra_price_l;
        $photoManager->handlePhoto($request, $extra, 'edit');

        $extra->save();
        return redirect()->route('extra_index')->with('success_message', 'The extra was edited');
    }

    public function destroy(Extra $extra, PhotoManageService $photoManager)
    {
        $photoManager->deleteOldPhoto($extra);
        $extra->delete();
        return redirect()->route('extra_index')->with('success_message', 'Extra was deleted');
    }
}
