<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicGroup extends Model
{
    use HasFactory;

    
    public function persons()
    {
        return $this->hasMany('App\Person');
    }
}
