<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'schedule';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
