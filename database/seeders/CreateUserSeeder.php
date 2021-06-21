<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'isAdmin' => '1',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'isAdmin' => '0',
                'password' => bcrypt('1234')
            ]
            ];
            foreach($user as $key => $value) {
                User::create($value);
            };
    }
}