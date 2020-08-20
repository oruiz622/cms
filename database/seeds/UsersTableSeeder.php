<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'oruiz1771@outlook.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Orlando Ruiz',
                'email' => 'oruiz622@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]);
        }
    }
}
