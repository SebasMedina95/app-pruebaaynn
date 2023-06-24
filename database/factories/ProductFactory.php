<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Product;
// use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */

// $factory->define(Product::class, function (Faker $faker) {

//     return [
//         'product_name' => $faker->word,
//         'product_description' => $faker->sentence(10),
//         'product_long_description' => $faker->text(),
//         'product_amount' => $faker->randomDigit(2),
//         'product_value' => $faker->randomFloat(2, 5, 500)
//     ];

// });

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * $table->string('product_name');
     * $table->string('product_description');
     * $table->text('product_long_description')->nullable();
     * $table->integer('product_amount');
     * $table->float('product_value');
     * $table->string('product_status');
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [

         'product_name' => Str::random(10),
         'product_description' => Str::random(50),
         'product_long_description' => Str::random(150),
         'product_amount' => Str::random(),
         'product_value' => Str::random()

        ];
    }
}
