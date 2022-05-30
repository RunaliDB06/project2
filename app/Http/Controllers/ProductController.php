<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product=new Product();
        $product->fname=$request->fname;
        $product->lname=$request->lname;
        $product->address=$request->address;
        $product->save();

    }
    public function index()
    {
        $product=Product::all();
        return view('table',compact('product'));
    }
}
