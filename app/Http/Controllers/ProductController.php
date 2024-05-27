<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetail($id){
        return view('detail', [
            'product' => Product::where("id", $id)->first()
        ]);
    }
}
