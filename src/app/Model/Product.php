<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];

    public function productTranslation()
    {
        return $this->hasMany('App\Model\ProductTranslation');
    }

    public function productImage()
    {
        return $this->hasMany('App\Model\ProductImage');
    }
}
