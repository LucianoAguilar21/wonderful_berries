<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    /** @use HasFactory<\Database\Factories\PotFactory> */
    use HasFactory;

     protected $fillable = ['size'];
}
