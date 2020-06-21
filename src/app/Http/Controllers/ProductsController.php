<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\ProductTranslation;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    private $productTranslation;

    public function __construct(ProductTranslation $productTranslation)
    {
        $this->productTranslation = $productTranslation;

    }

    public function index()
    {
        $products = $this->productTranslation->paginate(15);

        return view('Products.index', compact('products'));
    }


}
