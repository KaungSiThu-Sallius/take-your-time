<?php

namespace Database\Factories;

use App\Models\Other;
use Illuminate\Database\Eloquent\Factories\Factory;

class OtherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Other::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['seminar', 'competition']),
            'title' => $this->faker->jobTitle(),
            'image' => $this->faker->imageUrl(),
            'deadline' => $this->faker->dateTime($max = 'now', $timezone = null),
            'place' => $this->faker->randomElement(['online', $this->faker->country()]),
            'start_date' => $this->faker->dateTime($min = 'now', $timezone = null),
            'organization_name' => $this->faker->name(),
            'details' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'apply_form_link' => $this->faker->url(),
        ];
    }
}