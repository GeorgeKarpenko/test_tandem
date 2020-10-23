<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Person extends Model
{
    use HasFactory;
    
    public function academicGroup()
    {
        return $this->belongsTo('App\AcademicGroup');
    }

    public function fullYears()
    {
        $full_years = Carbon::parse($this->birth_date)->diff(Carbon::now())->format('%y');
        return $full_years;
    }

    public function activePersonsInANonArchiveGroup($group_id)
    {
        return $this->where('active', '=', 1)
        ->join('academic_groups', function ($join) use ($group_id) {
            $join->on('academic_groups.id', '=', 'people.academic_group_id')
            ->where('academic_groups.id', '=', $group_id)
            ->where('academic_groups.archive', '=', 0);
        })->select('people.*')
        ->get();
    }
}
