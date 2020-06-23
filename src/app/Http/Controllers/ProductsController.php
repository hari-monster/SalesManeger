<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\ProductImage;
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

    public function showCreateForm()
    {
        return view('Products.create');
    }

    public function create(Product $product, ProductImage $productImage, Request $request)
    {
//        $this->productTranslation->name = $request->product_name;
//        $productTranslation->product();
//        $productTranslation->description = $request->product_description;
//        $product->code = $request->product_code;
//        $productImage->id = $request->product_image;
//        $product->save();
//        dd($productTranslation);dd


        $product::create(['name' => $request->product_name]);

        return redirect()->route('index');
    }


}
