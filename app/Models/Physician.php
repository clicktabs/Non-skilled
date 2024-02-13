<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function changeStatus(string $addon_Id): string
    {
        $addon = self::where('id', $addon_Id)->first();

        try {
            if ($addon->active_status) {
                $addon->active_status = false;
                $addon->save();
                return "$addon->name disabled successfully";
            } else {
                $addon->active_status = true;
                $addon->save();
                return "$addon->name enabled successfully";
            }
        } catch (\Throwable $th) {
            return false;
        }

    }


    public function extra_info_physicians()
    {
        return $this->hasMany(PatientExtraInfo::class, 'physician_id');
    }

    public function order()
    {
        return $this->hasOne(PhysicianOrder::class, 'id', 'id');
    }
}
