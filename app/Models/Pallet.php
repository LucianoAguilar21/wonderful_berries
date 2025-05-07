<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pallet extends Model
{
    /** @use HasFactory<\Database\Factories\PalletFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'pallet_number',
        'field_number',
        'lot',
        'box_count',
        'variety',
        'pot_size',
        'label',
        'traceability_code',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function qualityInspection()
    {
        return $this->hasOne(QualityInspection::class);
    }
}
