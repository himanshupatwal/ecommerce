<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
       $details = Product::all();
       return view('index',compact('details'));
    }

    function detail($id){

       $data = Product::find($id);
       return view('detail',compact('data')); 
    }
}
