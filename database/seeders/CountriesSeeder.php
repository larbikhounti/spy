<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::updateOrCreate(
            ['name' => 'Saudi arabia']
        );
        Country::updateOrCreate(
            ['name' => 'qatar']
        );
        Country::updateOrCreate(
            ['name' => 'kuwait']
        );
        Country::updateOrCreate(
            ['name' => 'bahrain']
        );
        Country::updateOrCreate(
            ['name' => 'oman']
        );
        Country::updateOrCreate(
            ['name' => 'uae']
        );
    }
}
