<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Services\PhotoManageService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('back.product.index', ['products' => $products]);
    }

    public function create()
    {
        $cats = Cat::all();
        return view('back.product.create', ['cats' => $cats]);
    }

    public function store(Request $request, PhotoManageService $photoManager)
    {
        $product = new Product;

        $photoManager->handlePhoto($request, $product, 'create');

        $product->title = $request->product_title;
        $product->amount = $request->product_amount;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->info = $request->product_info;
        $product->save();

        //Attach category
        if ($request->cat_id) {
            $product->cats()->attach($request->cat_id);
        }

        return redirect()->route('product_index')->with('success_message', 'New product was created.');
    }

    public function edit(Product $product)
    {
        $cats = Cat::all();

        return view('back.product.edit', [
            'product' => $product,
            'cats' => $cats,
            'catId' => $product->cats->first()->id ?? 0
        ]);
    }

    public function update(Request $request, Product $product, PhotoManageService $photoManager)
    {
        $product->title = $request->product_title;
        $product->amount = $request->product_amount;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->info = $request->product_info;

        $photoManager->handlePhoto($request, $product, 'edit');
        $product->save();

        //Change category

        $product->cats()->detach();
        if ($request->cat_id) {
            $product->cats()->attach($request->cat_id);
        }


        return redirect()->route('product_index')->with('success_message', 'The cat was edited');
    }

    public function destroy(Product $product, PhotoManageService $photoManager)
    {
        $photoManager->deleteOldPhoto($product);
        $product->cats()->detach(); // remove cats attachments from table cats_products
        $product->delete();
        return redirect()->route('product_index')->with('success_message', 'Product was deleted');
    }
}
