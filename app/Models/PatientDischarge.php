<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDischarge extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function address()
    {
        return $this->belongsTo(PatientAddressInfo::class, 'patient_id', 'patient_id');
    }

    public function physician()
    {
        return $this->belongsTo(PhysicianOrder::class, 'patient_id', 'patient_history_id');
    }
}
