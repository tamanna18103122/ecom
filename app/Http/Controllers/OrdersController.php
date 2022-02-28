<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class OrdersController extends Controller
{
   public function orderlist()
   {

    return view('admin.layouts.order');
   }
   public function orderadd()
   {
       return view ('admin.pages.order_add');
   }
   public function store(Request $request)
{
  
    //validate

    $request->validate([
        'p_id'=>'required',
        'name'=>'required',
        'cost'=>'required',
        'details'=>'required',
        


    ]);
    // dd(date('Ymdhms'));
    $filename='';
   if($request->hasfile('image'))
   {
       $file=$request->file('image');
       $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
       $file->storeAs('/uploads',$filename);

   }
    // dd("ok");


       Product::create([

           'order_id'=>$request->o_id,
           'name'=>$request->name,
           'cost'=>$request->cost,
           'details'=>$request->details,
           'image'=>$filename,


       ]);
      
       return redirect()->back();
}
}
