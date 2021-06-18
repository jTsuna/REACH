<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin'
        ]);

        Role::create([
            'name' => 'Head Counselor'
        ]);

        Role::create([
            'name' => 'Counselor'
        ]);

        Role::create([
            'name' => 'Student'
        ]);
    }
}
