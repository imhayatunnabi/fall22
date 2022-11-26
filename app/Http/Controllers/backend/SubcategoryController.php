<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function list(){
        $subcategories = Subcategory::get();
        // dd($subcategories);
      return view('backend.pages.subCategory.list',compact('subcategories'));
    }
    public function create(){
      return view('backend.pages.subCategory.create');
    }
    public function subCategoryCreate(Request $request ){
        // dd($request->all());
        Subcategory::create([
            'subcategory_name'=>$request->subcategory_name,
            'subcategory_details'=>$request->subcategory_details,
        ]);
        return back();
    }
    public function delete($id){
        // dd($id);
        Subcategory::find($id)->delete();
        return back();
    }
}
