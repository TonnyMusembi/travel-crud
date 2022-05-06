<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index(){
        return Order::all();

    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'vehicle_id' => 'required',
            'status'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Order::create([
                'vehicle_id' => $request->input('vehicle_id'),
                'status' => $request->input('status'),
            ]);
        }
        return response()->json(['req' => $request]);


    }
    public function create($id){

        return response()->json();

    }
    public function destroy($id){
      
    }

}
