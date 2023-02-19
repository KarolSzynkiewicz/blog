<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    protected  $driver = Driver::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'compay' => fake()->company(),
            'truck_plates' => fake()->lexify('???????'),
            'trailer_plates' => fake()->lexify('???????'),
            'name' =>fake()->firstName(),
            'surname' => fake()->surname('???')
        ];
    }
}


