<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $user = [
            [
                'name' => 'Tony',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'Ghaprus',
                'email' => 'receptionis@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'receptionis',
            ]
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
