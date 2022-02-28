<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function productlist()
    {
 
     return view('admin.layouts.products');
    }
    public function productadd()
    {
        return view ('admin.pages.product_add');
    }
    public function store(Request $request)
{
        Product::create([

            'product_id'=>$request->p_id,
            'name'=>$request->name,
            'cost'=>$request->cost,
            'details'=>$request->details,

        ]);
        return redirect()->back();
}
}
