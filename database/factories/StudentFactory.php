<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'Class' => $this->faker->company,
            'Gender' => $this->faker->randomElement(['male', 'female']),
            'Birthday' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')
                ->format('d/m/Y'),
            'Address' => $this->faker->address,
        ];
    }
}
