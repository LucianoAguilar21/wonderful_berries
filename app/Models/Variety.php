<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    /** @use HasFactory<\Database\Factories\VarietyFactory> */
    use HasFactory;
    protected $fillable = ['name'];
}
