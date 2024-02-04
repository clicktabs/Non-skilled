<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    use HasFactory;
    protected $table = 'annual_reports';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
