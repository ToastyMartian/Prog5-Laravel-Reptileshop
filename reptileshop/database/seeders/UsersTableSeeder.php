<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $buyerRole = Role::where('name', 'buyer')->first();
        $sellerRole = Role::where('name', 'seller')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'cakallemein@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);

        $admin->roles()->attach($adminRole);
    }
}
