<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('backend.pages.product.list',compact('products'));
    }
    public function createForm(){
        return view('backend.pages.product.create');
    }
    public function createSubmit(Request $request){
        // dd($request->all());
        Product::create([
            // migration column name => input field name
            'product_name'=>$request->product_name,
            'product_details'=>$request->product_details,
            'product_price'=>$request->product_price,
            'product_weight'=>$request->product_weight,
            'product_quantity'=>$request->product_quantity
        ]);
        return redirect()->route('product.list');
    }
    public function delete($id){
       $product=  Product::find($id)->delete();
       return back();
    }
    // product edit section
    public function editForm($id){
        $product = Product::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }
    public function editFormSubmit(Request $request,$id){
        $product = Product::find($id)->update([
            'product_name'=>$request->product_name,
            'product_details'=>$request->product_details,
            'product_price'=>$request->product_price,
            'product_weight'=>$request->product_weight,
            'product_quantity'=>$request->product_quantity
        ]);
        return back();
    }

}