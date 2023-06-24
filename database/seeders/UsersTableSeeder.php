<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * $table->string('name');
     * $table->string('email')->unique();
     * $table->string('password');
     */
    public function run(): void {

        User::create(
            [
                'name' => 'Juan Sebastian Medina Toro',
                'email' => 'sebasmedina@gmail.com',
                'password' => bcrypt('123456789')
            ]
        );

        User::create(
            [
                'name' => 'Fabio de Jesus Medina Henao',
                'email' => 'fabiomedina@gmail.com',
                'password' => bcrypt('123456789')
            ]
        );

        User::create(
            [
                'name' => 'Anjellin Morales Panesso',
                'email' => 'anjellinmorales@gmail.com',
                'password' => bcrypt('123456789')
            ]
        );

    }
}
