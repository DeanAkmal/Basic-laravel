<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spps extends Model
{
    protected $table = 'spps';
    protected $fillable = ['tahun', 'nominal'];
}

