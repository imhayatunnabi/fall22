<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    // protected $fillable=['product_name','product_details','product_price','product_weight','product_quantity'];
    protected $guarded=[];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}