<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

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

    function AddToCart(Request $request){
    	if(Session::has('user')){
          $cart = new Cart;
          $cart->product_id = $request->product_id;
          $cart->user_id = Session::get('user')->id;
          $cart->save();
          return redirect('/');
    	}
    	else{
    		return redirect('login');
    	}
    }

    static function cartItems(){
        $userid = Session::get('user')['id'];
        return $totalitems = Cart::where('user_id',$userid)->count();
    }
}
