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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminadmin'),
        ]);
        $buyer = User::create([
            'name' => 'Buyer',
            'email' => 'buyer@gmail.com',
            'password' => bcrypt('buyerbuyer'),
        ]);
        $seller = User::create([
            'name' => 'Seller',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('sellerseller'),
        ]);

        $admin->roles()->attach($adminRole);
        $buyer->roles()->attach($buyerRole);
        $seller->roles()->attach($sellerRole);
    }
}
