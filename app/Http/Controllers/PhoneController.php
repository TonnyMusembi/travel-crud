<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Phone;
use Illuminate\Support\Facades\Validator;



class PhoneController extends Controller
{
    //
    public function index(){
        return Phone::all();

    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'phone_id' => 'required',
            'name'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Phone::create([
                'phone_id' => $request->input('phone_id'),
                'name' => $request->input('name'),
            ]);
        }
        return response()->json(['req' => $request]);

    }
    public function destroy($id){
        return response()->json();
    }

    public function edit(Request $request){
     return response()->json();
    }
}
