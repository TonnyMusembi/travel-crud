<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ussd;
use Illuminate\Support\Facades\Validator;
use Laravel\Ui\Presets\React;
class UssdController extends Controller
{
    //
    public function index()
    {
        return Ussd::all();
    }
    public function store(Request $request)
    {
        //return response()->json();
        $validator = Validator::make($request->all(), [
            'ussd_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Ussd::create([
                'ussd_id' => $request->input('ussd_id'),
            ]);
        }
        return response()->json(['req' => $request]);
    }
    public function edit($id)
    {
    }

    public function destroy($id)
    {
        return response()->json();
    }
}
