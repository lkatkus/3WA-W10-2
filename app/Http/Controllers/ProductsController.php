<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Manufacturer;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(){
        return view('products.create');
    }

    public function edit($id){
        // GET DATA FROM DATABASE
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $manufacturers = Manufacturer::all();

        // dd - similar to var_dump
        // dd($product);

        return view('products.edit',compact('product','categories','manufacturers'));

    }

    public function destroy($id){
        echo 'derp';
    }

}
