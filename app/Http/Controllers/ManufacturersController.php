<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;

class ManufacturersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers.index',['manufacturers'=>$manufacturers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        $products = Product::where('manufacturer',$manufacturer->id)->get();
        return view('manufacturers.show',['manufacturer' => $manufacturer, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
            return view('manufacturers.edit',['manufacturer' => $manufacturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        // VALIDATING REQUEST
        $this->valid($request);

        // CREATING NEW OBJECT TO BE INSERTED INTO DB
        $manufacturer->title = $request->title;

        // SAVING OBJECT TO DB
        $manufacturer->save();

        // REDIRECTING TO INDEX
        return redirect()->route('manufacturers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
    }

    private function valid($request){
        $request->validate([
            'title' => 'required|alpha_num|max:255',
        ]);
    }

}
