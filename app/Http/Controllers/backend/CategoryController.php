<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        return view('backend.pages.category.list');
    }
    public function createForm(){
        return view('backend.pages.category.create');
    }
    public function updateForm(){
        return view('backend.pages.category.update');
    }
}