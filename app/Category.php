<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // public function products(){
    //
    // }

    // RETURNS THE AMOUNT OF PRODUCTS IN CLASS
    public function products()
        {
            return Product::where('category',$this->id)->count();
        }
}
