<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
                'email' => 'buildex001@mail.com',
                'user' => 'buildex001',
                'password' => Hash::make('aa123456'),
                'name' => 'buildex001',
                'image' => '',
                'type' => 'user',
                'status' => 'Y',
                'expire' => null,
            ],
            [
                'email' => 'buildex002@mail.com',
                'user' => 'buildex002',
                'password' => Hash::make('aa123456'),
                'name' => 'buildex002',
                'image' => '',
                'type' => 'user',
                'status' => 'N',
                'expire' => null,
            ],
            [
                'email' => 'buildex003@mail.com',
                'user' => 'buildex003',
                'password' => Hash::make('aa123456'),
                'name' => 'buildex003',
                'image' => '',
                'type' => 'user',
                'status' => 'R',
                'expire' => null,
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        };
    }
}
