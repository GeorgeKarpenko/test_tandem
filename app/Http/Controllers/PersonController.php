<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Person $people, $group_id)
    {
        $people = $people->activePersonsInANonArchiveGroup($group_id);
        return response()->json($people); 
    }
}
