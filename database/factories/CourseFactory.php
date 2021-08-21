<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => Str::slug($this->faker->jobTitle()),
            'type' => $this->faker->randomElement(['free_course', 'paid_course']),
            'course_name' => $this->faker->jobTitle(),
            'image' => $this->faker->imageUrl(),
            'deadline' => $this->faker->dateTime($max = 'now', $timezone = null),
            'place' => 'Online',
            'price' => $this->faker->randomNumber(2),
            'start_date' => $this->faker->dateTime($min = 'now', $timezone = null),
            'taught_by' => $this->faker->name(),
            'details' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'course_duration' => $this->faker->date($format = 'Y-m-d', $max = 'now') . " - " . $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'timetable' => $this->faker->dateTime($max = 'now', $timezone = null),
            'apply_form_link' => $this->faker->url(),
        ];
    }
}