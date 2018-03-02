<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{


    public function products()
        {
            return Product::where('manufacturer',$this->id)->count();
        }

}
