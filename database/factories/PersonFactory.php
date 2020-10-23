<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Support\Str;
use App\Models\AcademicGroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'birth_date' => $this->faker->date,
            'active' => rand(0,1),
            'academic_group_id' => AcademicGroup::all()->random()->id,
        ];
    }
}
