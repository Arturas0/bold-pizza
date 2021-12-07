<?php

namespace App\Http\Controllers;

use App\Models\PizzaSize;
use Illuminate\Http\Request;

class PizzaSizeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pizzaSizes = PizzaSize::all();
        return view('back.pizza_size.index', ['pizzaSizes' => $pizzaSizes]);
    }

    public function create()
    {
        return view('back.pizza_size.create');
    }

    public function store(Request $request)
    {
        $pizzaSize = new PizzaSize;
        $pizzaSize->title = $request->pizza_size_title;
        $pizzaSize->size = $request->pizza_size_size;
        $pizzaSize->save();
        return redirect()->route('pizza_size_index')->with('success_message', 'New pizza size was created.');
    }

    public function edit(PizzaSize $pizzaSize)
    {
        return view('back.pizza_size.edit', ['pizzaSize' => $pizzaSize]);
    }

    public function update(Request $request, PizzaSize $pizzaSize)
    {
        $pizzaSize->title = $request->pizza_size_title;
        $pizzaSize->size = $request->pizza_size_size;
        $pizzaSize->save();
        return redirect()->route('pizza_size_index')->with('success_message', 'The pizza size was edited.');
    }

    public function destroy(PizzaSize $pizzaSize)
    {
        $pizzaSize->delete();
        return redirect()->route('pizza_size_index')->with('success_message', 'Pizza size gone.');
    }
}
