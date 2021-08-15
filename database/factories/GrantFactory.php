<?php

namespace Database\Factories;

use App\Models\Grant;
use Illuminate\Database\Eloquent\Factories\Factory;

class GrantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'level' => $this->faker->randomElement(['undergraduate', 'master', 'phd', 'fellowship']),
            'title' => $this->faker->jobTitle(),
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