<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'user_code' => generate_random_token(),
            'first_name' => 'Super Admin',
            'last_name' => 'clickTabs',
            'email' => 'superadmin@click-tabs.com',
            'password' => Hash::make('Q4nKBdQUvMIZma@VznctMequre')
        ]);

        User::create(
            [
                'user_code' => generate_random_token(),
                'first_name' => 'Admin',
                'last_name' => 'clickTabs',
                'email' => 'admin@click-tabs.com',
                'password' => Hash::make('Q4nKBdQUvMIZma@VznctMequre')
            ]
        );
    }
}

