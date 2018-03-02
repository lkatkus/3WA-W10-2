<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');

        // SAME SAVE ABOVE EXCENT ADDED ONLY TO THE LISTED ROUTES
        // $this->middleware('auth')->only('edit','destroy');
    }


    public function index()
    {
        $categories = Category::all();
        return view('categories.index',['categories'=>$categories]);
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {

        // VALIDATING REQUEST
            $this->valid($request);

        // CREATING NEW OBJECT TO BE INSERTED INTO DB
            $category = new Category;
            $category->title = $request->title;

        // SAVING OBJECT TO DB
            $category->save();

        // REDIRECTING TO INDEX
            return redirect()->route('categories.index');

    }

    public function show(Category $category)
    {
        $products = Product::where('category',$category->id)->get();
        return view('categories/show',['category' => $category, 'products' => $products]);
    }

    public function edit(Category $category)
    {
        return view('categories/edit',['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        // VALIDATING REQUEST
            $this->valid($request);

        // CREATING NEW OBJECT TO BE INSERTED INTO DB
            $category->title = $request->title;

        // SAVING OBJECT TO DB
            $category->save();

        // REDIRECTING TO INDEX
            return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }

    private function valid($request){
        $request->validate([
            'title' => 'required|alpha_num|max:255',
        ]);
    }
}
