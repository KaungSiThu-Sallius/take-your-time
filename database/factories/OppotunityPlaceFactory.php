<?php

namespace Database\Factories;

use App\Models\OppotunityPlace;
use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Factories\Factory;

class OppotunityPlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OppotunityPlace::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Scholarship::all()->random()->id,
            'oppotunity' => $this->faker->randomElement(['undergraduate', 'master', 'phd', 'fellowship', 'grant', 'conference', 'free_course', 'paid_course', 'internship', 'part_time_job', 'full_time_job', 'seminar', 'competition']),
            'place' => $this->faker->country(),
        ];
    }
}