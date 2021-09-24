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
            'role_id' => 2,
            'name' => 'Head Counselor',
            'email' => 'hcounselor@reach.com',
            'password' => Hash::make('ngb6002'),
            'idNum' => 1234567891
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Counselor',
            'email' => 'counselor@reach.com',
            'password' => Hash::make('ngb6002'),
            'idNum' => 1234567892
        ]);

        User::create([
            'role_id' => 4,
            'department_id' => 14,
            'name' => 'Albert John Labayan',
            'email' => 'labayanalbert@gmail.com',
            'password' => Hash::make('123456'),
            'idNum' => 2018140511
        ]);
    }
}
