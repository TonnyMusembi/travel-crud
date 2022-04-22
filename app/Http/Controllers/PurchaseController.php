<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(){
        return Purchase::all();
    }

    public function store( Request $request){
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'product'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Purchase::create([
                'product_id' => $request->input('product_id'),
                'product' => $request->input('product'),
            ]);
        }
        return response()->json(['req' => $request]);

    }
    public function create($id){
   return view ('create');
    }
    public function update($id){

    }
    public function destroy(Request $request){
        return response()->json();

    }
}
