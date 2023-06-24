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
                'password' => bcrypt('123456789'),
                'admin' => true //Por defecto será admin
            ]
        );

        User::create(
            [
                'name' => 'Fabio de Jesus Medina Henao',
                'email' => 'fabiomedina@gmail.com',
                'password' => bcrypt('123456789'),
                'admin' => true //Por defecto será admin
            ]
        );

        User::create(
            [
                'name' => 'Anjellin Morales Panesso',
                'email' => 'anjellinmorales@gmail.com',
                'password' => bcrypt('123456789'),
                'admin' => true //Por defecto será admin
            ]
        );

        User::create(
            [
                'name' => 'Javier Antonio Garcia',
                'email' => 'javigarcia@gmail.com',
                'password' => bcrypt('123456789'),
                'admin' => false //Por defecto NO será admin
            ]
        );

        User::create(
            [
                'name' => 'Monica Cecilia Toro Toro',
                'email' => 'monicatoro@gmail.com',
                'password' => bcrypt('123456789'),
                'admin' => false //Por defecto NO será admin
            ]
        );

        User::create(
            [
                'name' => 'Maria Paulina Villamizar',
                'email' => 'maripaulina@gmail.com',
                'password' => bcrypt('123456789'),
                'admin' => false //Por defecto NO será admin
            ]
        );

    }
}
