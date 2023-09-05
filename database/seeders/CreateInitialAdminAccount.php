<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // unguard(): disable all mass assignable restrictions.
        User::unguard();

        User::create([
            'email' => 'bui.minh.dung@sun-asterisk.com',
            'password' => bcrypt('Bui1Minh2Dung3.'),
            'first_name' => 'Administrator',
            'last_name' => 'Account',
            'is_active' => true,
            'username' => 'administrator@account',
            'is_admin' => true,
        ]);
    }
}
