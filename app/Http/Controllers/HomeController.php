<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function home(){
        return view('home',[
            'products' => Product::all(),
            'categories' => Category::all(),
        ]);
    }

    public function category($slug){
        $categoryFoods = Category::where('slug', $slug)->first();
        $categories = Category::all();
        return view('home', [
            'categories' => $categories,
            'products' => $categoryFoods->products,
        ]);
    }

    public function search(Request $request){
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('home', [
            'categories' => Category::all(),
            'products' => $products,
        ]);
    }
}
