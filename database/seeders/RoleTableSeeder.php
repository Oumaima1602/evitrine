<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'internaute';
$role_employee->description = 'A internaute User';
$role_employee->save();
$role_manager = new Role();
$role_manager->name = 'admin';
$role_manager->description = 'A Admin User';
$role_manager->save();

    }
}
