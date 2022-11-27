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
        $request->validate([
            'subcategory_name'=>'required',
            'subcategory_details'=>'required'
        ]);
        Subcategory::create([
            'subcategory_name'=>$request->subcategory_name,
            'subcategory_details'=>$request->subcategory_details,
        ]);
        return redirect()->route('subcategory.list')->with('success','subcategory created successfully');
    }
    public function delete($id){
        // dd($id);
        Subcategory::find($id)->delete();
        return back()->with('danger',' ooopps !!! subcategory deleted');
    }
    public function updateForm($id){
        $subcategory = Subcategory::find($id);
        return view('backend.pages.subCategory.updateForm',compact('subcategory'));
    }
    public function update(Request $request,$id){
        // dd($request->all());
        $request->validate([
            'subcategory_name'=>'required|alpha',
            'subcategory_details'=>'required'
        ]);
        $subcategory = Subcategory::find($id);
        $subcategory->update([
            'subcategory_name'=>$request->subcategory_name,
            'subcategory_details'=>$request->subcategory_details
        ]);
        return redirect()->route('subcategory.list')->with('success','Subcategory Updated Successfully');

    }
}