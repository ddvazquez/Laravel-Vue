<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $casts = [
        'release_date'  => 'date:d-m-Y'
    ];
}
