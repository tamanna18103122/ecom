<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CustomerController extends Controller
{
    public function productlist()
    {
 
     return view('admin.layouts.customers');
    }
    public function customeradd()
    {
        return view ('admin.pages.customer_add');
    }
    public function store(Request $request)
{
        Customer::create([

            'customer_id'=>$request->c_id,
            'name'=>$request->name,
            'details'=>$request->details,

        ]);
        return redirect()->back();
}
}
