<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'product_name' => "Product 1",
                'product_description' => "The product_description 1",
                'product_long_description' => "product_long_description 1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 45,
                'product_value' => 1500,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 2",
                'product_description' => "The product_description 2",
                'product_long_description' => "product_long_description 2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 900,
                'product_status' => "1",
                'category_id' => 1
            ]
        );

        Product::create(
            [
                'product_name' => "Product 3",
                'product_description' => "The product_description 3",
                'product_long_description' => "product_long_description 3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 45,
                'product_value' => 1100,
                'product_status' => "1",
                'category_id' => 3
            ]
        );

        Product::create(
            [
                'product_name' => "Product 4",
                'product_description' => "The product_description 4",
                'product_long_description' => "product_long_description 4. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 450,
                'product_status' => "1",
                'category_id' => 4
            ]
        );

        Product::create(
            [
                'product_name' => "Product 5",
                'product_description' => "The product_description 5",
                'product_long_description' => "product_long_description 5. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 25,
                'product_value' => 1450,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 6",
                'product_description' => "The product_description 6",
                'product_long_description' => "product_long_description 6. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 650,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 7",
                'product_description' => "The product_description 7",
                'product_long_description' => "product_long_description 7. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 750,
                'product_status' => "1",
                'category_id' => 3
            ]
        );

        Product::create(
            [
                'product_name' => "Product 8",
                'product_description' => "The product_description 8",
                'product_long_description' => "product_long_description 8. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 1850,
                'product_status' => "1",
                'category_id' => 4
            ]
        );

        Product::create(
            [
                'product_name' => "Product 9",
                'product_description' => "The product_description 9",
                'product_long_description' => "product_long_description 9. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 950,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 10",
                'product_description' => "The product_description 10",
                'product_long_description' => "product_long_description 10. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 1050,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 11",
                'product_description' => "The product_description 11",
                'product_long_description' => "product_long_description 11. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 1150,
                'product_status' => "1",
                'category_id' => 3
            ]
        );

        Product::create(
            [
                'product_name' => "Product 12",
                'product_description' => "The product_description 12",
                'product_long_description' => "product_long_description 12. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 15,
                'product_value' => 1250,
                'product_status' => "1",
                'category_id' => 2
            ]
        );

        Product::create(
            [
                'product_name' => "Product 13",
                'product_description' => "The product_description 13",
                'product_long_description' => "product_long_description 13. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 21,
                'product_value' => 950,
                'product_status' => "1",
                'category_id' => 3
            ]
        );

        Product::create(
            [
                'product_name' => "Product 14",
                'product_description' => "The product_description 14",
                'product_long_description' => "product_long_description 14. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 27,
                'product_value' => 650,
                'product_status' => "1",
                'category_id' => 1
            ]
        );

        //Estos estarán por defecto sin imagenes para analizar comportamiento
        Product::create(
            [
                'product_name' => "Product 15",
                'product_description' => "The product_description 15",
                'product_long_description' => "product_long_description 15. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 27,
                'product_value' => 950,
                'product_status' => "1",
                'category_id' => 3
            ]
        );

        Product::create(
            [
                'product_name' => "Product 16",
                'product_description' => "The product_description 16",
                'product_long_description' => "product_long_description 16. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                'product_amount' => 55,
                'product_value' => 550,
                'product_status' => "1",
                'category_id' => 1
            ]
        );
    }
}
