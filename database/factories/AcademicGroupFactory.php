<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AcademicGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcademicGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'course' => rand(1,5),
            'faculty' => rand(1,14),
            'archive' => $this->faker->boolean,
        ];
    }
}
