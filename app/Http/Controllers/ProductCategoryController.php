<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
   function product_category(){
    $all = ProductCategory::all();
    return view('admin.productCategory',[
        'all'=>$all,
    ]);
   }




   function add(Request $request){
     //validation
     $request->validate([
        'name'=>'required',
    ]);
 
        ProductCategory::insert([
            'name'=>$request->name,
            'created_at'=>Carbon::now(),
        ]);
        return back();
   }


   function delete($uid){
    ProductCategory::find($uid)->delete();
    return back();
   }
}
