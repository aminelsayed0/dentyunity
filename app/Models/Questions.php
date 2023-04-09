<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    public function UnDescribedCase()
    {
        return $this->belongsTo(UnDescribedCase::class);
    }
}
