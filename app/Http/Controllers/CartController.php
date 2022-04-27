<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //
    public function index(){
      return Cart::all();
    }
    public function store(Request $request){


        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'name'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Cart::create([
                'product_id' => $request->input('product_id'),
                'name' => $request->input('name'),
            ]);
        }
        return response()->json(['req' => $request]);

    }
    public function destroy(){
        
    }
}
