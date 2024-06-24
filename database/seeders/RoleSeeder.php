<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $roleNames = ['superadmin'];

            foreach ($roleNames as $roleName) {
                Role::firstOrCreate(['name' => $roleName], ['guard_name' => 'api', 'name' => $roleName]);
            }
        });
    }
}