<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;


class CompanySeeder extends Seeder
{

    public function run()
    {
        Company::factory()->count(50)->create();
    }
}
