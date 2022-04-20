<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    //
    public function index()
    {

        return League::all();
        //return response()->json();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'game_id' => 'required',
            'title'  => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

            League::create([
                'game_id' => $request->input('game_id'),
                'title' => $request->input('title'),
            ]);
        }
        return response()->json(['req' => $request]);
    }
    public function update($id)
    {
    }

    public function destroy($id)
    {
        return response()->json();
    }
}
