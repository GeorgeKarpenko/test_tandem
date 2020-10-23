<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Person;
use App\Models\AcademicGroup;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PersonTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $people = Person::all();
        foreach ($people as $key => $person) {
            $check = Carbon::parse($person->birth_date)->addYears($person->fullYears());
            var_dump($check);
            if($check <= Carbon::now() && $check->addYear() > Carbon::now()){
                $this->assertTrue(true);
            }
            else{
                $this->assertTrue(false);
            }
        }
    }
}
