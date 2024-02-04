<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicianOrder extends Model
{
    use HasFactory;
    // protected $table = 'physician_order';
    protected $guarded = [];

    public function physician() {
        return $this->belongsTo(Physician::class, 'id', 'id');
    }

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_history_id', 'id');
    }

}
