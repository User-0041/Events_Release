<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ev_name'=>$this->faker->sentence(),
            'ev_describ'=>$this->faker->paragraph(),
            'ev_date'=>$this->faker->date($format = 'Y-m-d', $min = 'now'),
            'ev_pic'=>$this->faker->image('public/images',640,480, null, false),
            ];
    }
}
