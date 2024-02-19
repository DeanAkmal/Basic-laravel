<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spps extends Model
{
    use HasFactory;
    protected $table = 'spps';
    protected $fillable = ['tahun', 'nominal'];
}

