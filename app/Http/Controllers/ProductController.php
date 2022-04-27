<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();

    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'name'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Product::create([
                'product_id' => $request->input('product_id'),
                'name' => $request->input('name'),
            ]);
        }
        return response()->json(['req' => $request]);

    }
    public function create($id){
    return view('create');
    }
    public function update(Request $request){
        return response()->json(['req'=>$request]);
    }
}
