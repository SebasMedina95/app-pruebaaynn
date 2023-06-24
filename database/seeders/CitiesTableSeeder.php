<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        City::create(
            [
                'city_name' => "Medellín"
            ]
        );

        City::create(
            [
                'city_name' => "Bogotá"
            ]
        );

        City::create(
            [
                'city_name' => "Cali"
            ]
        );

        City::create(
            [
                'city_name' => "Barranquilla"
            ]
        );

        City::create(
            [
                'city_name' => "Cartagena"
            ]
        );

        City::create(
            [
                'city_name' => "Santa Marta"
            ]
        );

    }
}
