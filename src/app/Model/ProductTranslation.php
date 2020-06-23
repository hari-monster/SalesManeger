<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{

    protected $fillable = ['name', 'description'];


    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'product_id');
    }
}
