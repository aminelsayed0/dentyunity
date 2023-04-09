<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function patient()
    {
        return $this->hasMany(Patient::class, 'doctor_id', 'id');
    }
    public function ToolForm()
    {
        return $this->hasMany(ToolForm::class, 'doctor_id', 'id');
    }
}
