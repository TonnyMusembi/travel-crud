<?php

namespace App\Http\Controllers;
use App\Models\vehicle;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class VehicleController extends Controller
{
    //
    public function index (){
        return  vehicle::all();

    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'order_id' => 'required',
            'status'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Vehicle::create([
                'order_id' => $request->input('order_id'),
                'status' => $request->input('status'),
            ]);
        }
        return response()->json(['req' => $request]);

    }
}
