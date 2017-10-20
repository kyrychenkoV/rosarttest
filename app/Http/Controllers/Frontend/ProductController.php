<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Master;
use App\Models\Product;
use App\Models\Technique;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.category', [
            'products'   => Product::getProductsItem($request->all()),
            'masters'    => Master::getMastersItem(),
            'categories' => Category::getCategoriesItem(),
            'techniques' => Technique::getTechniquesItem(),
        ]);
    }
}
