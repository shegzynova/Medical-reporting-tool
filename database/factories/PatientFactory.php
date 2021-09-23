<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->Name(),
            'age' => $this->faker->numberBetween($min = 1, $max = 100),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber(),
            'blood_group' => $this->faker->randomElement($array = array ('A','B','AB', 'O')), // password
        ];
    }
}
