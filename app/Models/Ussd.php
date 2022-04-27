<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ussd extends Model
{
    use HasFactory;
    protected $fillable = [
        'ussd_id',
        'name'
    ];
}
