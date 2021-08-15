<?php

namespace Database\Factories;

use App\Models\CriteriaScholarship;
use App\Models\Scholarship;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriteriaScholarshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CriteriaScholarship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Scholarship::all()->random()->id,
            'criteria' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}