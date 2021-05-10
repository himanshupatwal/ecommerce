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

    function search(Request $request){
       $details = Product::where('name','like','%'.$request->input('search').'%')->get();	
       return view('search',compact('details'));
    }
}
