<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Passenger Admin',
            'email' => 'admin@passenger',
            'password' => Hash::make('p4ss3ng3r'),
        ]);
    }
}
