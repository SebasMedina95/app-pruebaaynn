<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //El por default para cuando no se tenga categoría, por defecto quedará con id 1
        // y no lo vamos a dejar eliminar
        Category::create(
            [
                'name' => "SIN DEFINIR",
                'description' => "CATEGORÍA SIN DEFINIR",
                'image_category' => "CATEGORÍA SIN DEFINIR"
            ]
        );

        Category::create(
            [
                'name' => "Category 1",
                'description' => "The description category 1",
                'image_category' => "The img category 1"
            ]
        );

        Category::create(
            [
                'name' => "Category 2",
                'description' => "The description category 2",
                'image_category' => "The img category 2"
            ]
        );

        Category::create(
            [
                'name' => "Category 3",
                'description' => "The description category 3",
                'image_category' => "The img category 3"
            ]
        );

    }
}
