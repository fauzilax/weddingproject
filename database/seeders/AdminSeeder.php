<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Fauzilax',
                'email' => 'fauzilax@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Aldi',
                'email' => 'permana.azhar.aldi@gmail.com',
                'password' => Hash::make('password'),
            ]
        ];
    }
}
