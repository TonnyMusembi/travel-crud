<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bet;
use Illuminate\Support\Facades\Validator;

class BetController extends Controller
{
    //
    public function index()
    {
        //return Bet::all();
        return  response()->json();
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'bet_id' => 'required',
            'home_team' => 'required',
            'away_team' => 'required',
            'draw' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            Bet::create([
                'bet_id' => $request->input('bet_id'),
                'home_team' => $request->input('home_team'),
                'away_team' => $request->input('away_team'),
                'draw' => $request->input('away_team'),
            ]);
        }
        return response()->json(['req' => $request]);
    }
    public function update(Request $request)
    {
        return response()->json();
    }
    public function destroy(Request $request){
        return response()->json();
    }
}
