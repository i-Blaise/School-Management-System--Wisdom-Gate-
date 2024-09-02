<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $min = strtotime('-5 years'); // Minimum date (e.g., 5 years ago)
        $max = strtotime('now'); // Maximum date is now'

        return [
            'index' => $this->faker->unique()->numerify('WGS-####'),
            'first_name' => $this->faker->firstName(),
            'other_name' => $this->faker->optional($weight = 0.5)->lastName(),
            'last_name' => $this->faker->lastName(),
            'class' => $this->faker->randomElement($array = array ('KG1', 'KG2', '1', '2', '3', '4', '5', '6' )),
            'class_index' => '0',
            'student_image' => $this->faker->imageUrl('cats', true, 'Faker'),
            'dob' => $this->faker->date($format = 'd-m-Y', $max = '-3 years'), //Date of Birth (dob)
            'date_of_admission' => $this->faker->date('d-m-Y', 'now'),
            'nationality' => $this->faker->optional($weight = 0.2, $default = 'Ghanaian')->country(), // 80% chance of getting Ghanaian
            'gender' => $this->faker->randomElement(['male', 'female']),
            'residence_address' => $this->faker->streetAddress(),
            'num_of_siblings' => $this->faker->randomDigitNotNull()
        ];
    }
}
