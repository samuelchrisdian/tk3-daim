<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_id' => 1,
            'name' => 'Admin',
            'notes' => '-',
            'status' => 1
        ]);

        Role::create([
            'role_id' => 2,
            'name' => 'Manajer',
            'notes' => '-',
            'status' => 1
        ]);

        Role::create([
            'role_id' => 3,
            'name' => 'User',
            'notes' => '-',
            'status' => 1
        ]);

        User::create([
            'id' => 1,
            'role_id' => 1,
            'status' => 1,
            'name' => 'Super Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
