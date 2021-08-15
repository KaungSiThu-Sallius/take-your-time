<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['full_time_job', 'part_time_job', 'internship']),
            'title' => $this->faker->jobTitle(),
            'image' => $this->faker->imageUrl(),
            'deadline' => $this->faker->dateTime($max = 'now', $timezone = null),
            'place' => $this->faker->randomElement(['online', $this->faker->country()]),
            'start_date' => $this->faker->dateTime($min = 'now', $timezone = null),
            'organization_name' => $this->faker->name(),
            'details' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'job_duration' => $this->faker->date($format = 'Y-m-d', $max = 'now') . " - " . $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'apply_form_link' => $this->faker->url(),
        ];
    }
}