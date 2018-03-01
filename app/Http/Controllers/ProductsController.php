<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Manufacturer;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        $manufacturers = Manufacturer::all();
        return view('products.create',compact('categories','manufacturers'));
    }

    public function store(Request $request){
        // VALIDATION
            $this->valid($request);
        // CREATE NEW PRODUCT
            $product = new Product();
        // ADD DATA TO PRODUCT
            $product->title = $request->title;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->category = $request->category;
            $product->manufacturer = $request->manufacturer;
            $product->description = $request->description;
        // SAVE ADDED DATA
            $product->save();
        // REDIRECT TO HOMEPAGE
            return redirect('/');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $manufacturers = Manufacturer::all();
        return view('products.update',compact('product','categories','manufacturers'));
    }

    public function update(Request $request){
        // VALIDATION
            $this->valid($request);
        // FIND EDITED PRODUCT
            $product = Product::find($request->id);
        // UPDATED PRODUCT DATA
            $product->title = $request->title;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->category = $request->category;
            $product->manufacturer = $request->manufacturer;
            $product->description = $request->description;
        // SAVE UPDATED DATA
            $product->save();
        // REDIRECT
            return redirect()->route('home');
    }

    public function show(Request $request){
        // dd($request->id); /* request hold info provided with route where id is the same as in the route description */
        $product = Product::find($request->id);
        return view('products.show', compact('product'));
    }


    public function destroy(Request $request){
        $product = Product::find($request -> id);
        $product -> delete();
        return redirect('/');
    }

    private function valid($request){
        $request->validate([
            'title' => 'required|alpha_num|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|numeric',
            'manufacturer' => 'required|numeric',
            'description' => 'required|max:1000'
        ],[
            'title.required' => 'Laukelis :attribute privalomas'
        ]);
    }
}
