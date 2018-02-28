<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // ADDING A PROPERTY TO A MODEL "BY HAND" WHICH CAN BE ACCESSED
    // public $store = 'ebay';

    public function categories()
        {
            return $this->hasOne('App\Category','id','category');
        }

    public function manufacturers()
        {
            return $this->hasOne('App\Manufacturer','id','manufacturer');
        }
}
