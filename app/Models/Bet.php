<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;
    protected $fillable = [
        'bet_id',
        'home_team',
        'away_team',

    ];
}
