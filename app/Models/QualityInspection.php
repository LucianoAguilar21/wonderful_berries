<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityInspection extends Model
{
    /** @use HasFactory<\Database\Factories\QualityInspectionFactory> */
    use HasFactory;

    protected $fillable = [
        'pallet_id',
        'qc_percentage',
        'defect_red',
        'defect_sensory',
        'defect_soft',
        'inspector',
    ];

    public function pallet()
    {
        return $this->belongsTo(Pallet::class);
    }
}
