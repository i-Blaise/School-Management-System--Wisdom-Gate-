<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    // protected $model = Guardian::class;

    public function definition(): array
    {
        return [
            'ward_index' => 'WGS-0213',
            'ward_fullname' => 'Vernie Dickens',
            'title' => $this->faker->randomElement($array = array ('Mr.', 'Mrs', 'Miss', 'Dr.', 'Prof.')),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'occupation' => $this->faker->optional($weight = 0.8, $default = 'Trader')->jobTitle(),
            'employer' => $this->faker->optional($weight = 0.7, $default = 'Self-employed')->company(),
            'education_level' => $this->faker->optional($weight = 0.7, $default = 'None')->randomElement($array = array ( 'Primary', 'JHS', 'SHS', 'Diploma', 'Bachelors', 'Masters', 'PHD')),
            'residence_address' => $this->faker->streetAddress(),
            'phone_number1' => $this->faker->phoneNumber(),
            'phone_number2' => $this->faker->optional($weight = 0.7)->phoneNumber(),
            'email' => $this->faker->optional($weight = 0.7)->phoneNumber(),
            'relation_to_ward' => $this->faker->randomElement(['mother', 'father', 'uncle', 'aunty', 'brother', 'sister', 'care-taker']),
        ];
    }
}
