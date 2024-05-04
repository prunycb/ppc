<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesArray = [
            'admin',
            'user',
        ];

        foreach($rolesArray as $role) {
            Role::firstOrCreate(['name'=>$role],[
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }
    }
}
