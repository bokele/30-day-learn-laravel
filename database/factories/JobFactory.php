<?php

namespace Database\Factories;

use App\Models\Employer;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location' => 'onsite',
            'type' => 'full time',
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000 USD',
            'description' => fake()->paragraphs(10, true),
            'closing_date' => fake()->dateTimeThisYear('+' . round(1, 5) . ' weeks')
        ];
    }
}