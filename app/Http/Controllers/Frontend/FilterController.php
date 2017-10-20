<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class FilterController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.loadCategories',
            ['products' => Product::getProductsItem($request->all())]);

    }
}
