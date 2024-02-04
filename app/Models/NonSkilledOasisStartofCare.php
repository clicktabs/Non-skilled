<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonSkilledOasisStartofCare extends Model
{
    use HasFactory;
    protected $table = 'non_skilled_oasis_startof_cares';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
