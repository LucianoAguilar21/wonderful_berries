<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exporter extends Model
{
    /** @use HasFactory<\Database\Factories\ExporterFactory> */
    use HasFactory;

    protected $fillable = ['name'];
}
