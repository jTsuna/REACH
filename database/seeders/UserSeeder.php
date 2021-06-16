<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'erika',
            'email' => 'ramosyvonnee@gmail.com',
            'password' => Hash::make('123456'),
            'program' => 'IT',
            'student' => 2018109437
        ]);

        User::create([
            'name' => 'Albert',
            'email' => 'labayanalbert@gmail.com',
            'password' => Hash::make('123456'),
            'program' => 'IT',
            'student' => 2018140511
        ]);
    }
}
