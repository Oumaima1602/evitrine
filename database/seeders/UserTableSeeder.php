<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_agent = Role::where('name', 'internaute ')->first();
$role_admin = Role::where('name', 'admin')->first();
$employee = new User();
$employee->name = 'Internaute Name';
$employee->email = 'employee@example.com';
$employee->password = bcrypt('secret');
$employee->save();
$employee->roles()->attach($role_agent);
$manager = new User();
$manager->name = 'Admin Name';
$manager->email = 'manager@example.com';
$manager->password = bcrypt('secret');
$manager->save();
$manager->roles()->attach($role_admin);
}
    }

