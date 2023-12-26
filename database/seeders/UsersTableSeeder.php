<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'	=> 'Erna Ainul Khasanah',
            'email'	=> 'admin1@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'Risma Rizki Amalia',
            'email'	=> 'admin2@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'Putri Nur Sakinah',
            'email'	=> 'admin3@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'Indana Zulfa',
            'email'	=> 'admin4@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'Rizal Ardiansyah',
            'email'	=> 'admin5@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);
    }
}
