<?php

namespace App\Http\Controllers;

use App\Models\Nation;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class NationController extends Controller
{
    public function index(){
        //return Nation::all();

        return Nation::all();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'league_id' => 'required',
            'name'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Nation::create([
                'league_id' => $request->input('league_id'),
                'name' => $request->input('name'),
            ]);
        }
        return response()->json(['req' => $request]);
    }
    public function create(Request $request){
        //return response()->json();
        return view('create');
    }

}
