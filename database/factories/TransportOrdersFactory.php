<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransportOrdersFactory extends Factory
{
    protected $model = TransportOrder::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'client' => $this->faker->name,
            'reference_number' => $this->faker->uuid,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'currency' => $this->faker->currencyCode,
            'truck' => $this->faker->word,
            'loading_date' => $this->faker->date(),
            'unloading_date' => $this->faker->date(),
            'loading_address' => $this->faker->address,
            'unloading_address' => $this->faker->address,
        ];
    }
}
