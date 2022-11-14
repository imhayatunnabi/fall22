<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function list(){
      return view('backend.pages.subCategory.list');
    }
    public function create(){
      return view('backend.pages.subCategory.create');
    }
}
