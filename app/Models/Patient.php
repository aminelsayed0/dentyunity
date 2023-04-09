<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
    public function describedCase()
    {
        return $this->hasMany(DescribedCase::class, 'patient_id', 'id');
    }
    public function UnDescribedCase()
    {
        return $this->HasMany(UnDescribedCase::class, 'patient_id', 'id');
    }
}
