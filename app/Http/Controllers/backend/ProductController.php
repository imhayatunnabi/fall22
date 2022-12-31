<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list(){
        $products = Product::with('category')->get();
        // dd($products);
        return view('backend.pages.product.list',compact('products'));
    }
    public function createForm(){
        $categories = Category::get();
        // dd($categories);
        return view('backend.pages.product.create',compact('categories'));
    }
    public function createSubmit(Request $request){
        // dd($request->all());
        $request->validate([
            'product_name'=>'required',
            'product_details'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_weight'=>'required',
            'product_image'=>'required',
        ]);
        $fileName = null;
        if($request->hasFile('product_image')){
                $fileName = 'Kodeeo'.'_'.date('Ymdhmsis').'.'.$request->file('product_image')->getClientOriginalExtension();
                // dd($fileName);
                $request->file('product_image')->storeAs('/uploads/product',$fileName);
        }
        Product::create([
            // migration column name => input field name
            'product_name'=>$request->product_name,
            'product_details'=>$request->product_details,
            'product_price'=>$request->product_price,
            'product_weight'=>$request->product_weight,
            'product_quantity'=>$request->product_quantity,
            'product_image'=>$fileName,
            'category_id'=>$request->category_id
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
        $categories = Category::get();
        return view('backend.pages.product.edit',compact('product','categories'));
    }
    public function editFormSubmit(Request $request,$id){
        $product = Product::find($id)->update([
            'product_name'=>$request->product_name,
            'product_details'=>$request->product_details,
            'product_price'=>$request->product_price,
            'product_weight'=>$request->product_weight,
            'product_quantity'=>$request->product_quantity,
            'category_id'=>$request->category_id
        ]);
        return back();
    }

}