<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;


class ConferenceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conference::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'image' => $this->faker->imageUrl(),
            'deadline' => $this->faker->dateTime($max = 'now', $timezone = null),
            'funding' => $this->faker->randomElement(['fully-funded', 'partial-funded', 'self-funded']),
            'place' => $this->faker->randomElement(['online', $this->faker->country()]),
            'organized_by' => $this->faker->company(),
            'details' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'field' => $this->faker->jobTitle(),
            'official_website' => $this->faker->url(),
            'apply_form_link' => $this->faker->url(),
        ];
    }
}