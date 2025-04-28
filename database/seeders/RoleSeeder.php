<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(
            [
                [
                    'name' => 'Administrator',
                    'is_active' => 1,

                ],
                [
                    'role_name' => 'Pimpinan',
                    'is_active' => 1,
                ],
                [
                    'role_name' => 'Kasir',
                    'is_active' => 1,
                ],
            ]
                );
    }
}
