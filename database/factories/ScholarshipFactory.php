<?php

namespace Database\Factories;

use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ScholarshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Scholarship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'scholarship',
            'type' => $this->faker->randomElement(['undergraduate', 'master', 'phd', 'fellowship']),
            'title' => $this->faker->jobTitle(),
            'slug' => Str::slug($this->faker->jobTitle()),
            'image' => $this->faker->imageUrl(),
            'deadline' => $this->faker->dateTime($max = 'now', $timezone = null),
            'funding' => $this->faker->randomElement(['fully-funded', 'partial-funded', 'self-funded']),
            'country' => $this->faker->country(),
            'given_by' => $this->faker->company(),
            'details' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'official_website' => $this->faker->url(),
            'apply_form_link' => $this->faker->url(),
        ];
    }
}