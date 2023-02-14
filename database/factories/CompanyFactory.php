<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name' => fake()->unique()->company(),
            'post_code' => fake()->postcode(),
            'street' => fake()->streetname(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'building_number' =>fake()->buildingNumber(),
            'Invoice_prefix' => fake()->lexify('???')
        ];
    }
}

// tinker test Company::factory()->count(500)->create()


