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
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@reach.com',
            'password' => Hash::make('ngb6002'),
            'idNum' => 1234567890
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Counselor',
            'email' => 'counselor@reach.com',
            'password' => Hash::make('ngb6002'),
            'idNum' => 1234567891
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'erika',
            'email' => 'ramosyvonnee@gmail.com',
            'password' => Hash::make('123456'),
            'program' => 'IT',
            'idNum' => 2018109437
        ]);

        User::create([
            'role_id' => 4,
            'name' => 'Albert',
            'email' => 'labayanalbert@gmail.com',
            'password' => Hash::make('123456'),
            'program' => 'IT',
            'idNum' => 2018140511
        ]);
    }
}
