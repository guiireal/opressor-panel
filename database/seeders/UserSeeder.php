<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::query()->create([
            'name' => 'Guilherme',
            'email' => 'aldebaran@aldebarandev.com',
            'password' => bcrypt('1811aptkx21'),
        ]);

        User::query()->create([
            'name' => 'Roman',
            'email' => 'oneromano00@gmail.com',
            'password' => bcrypt('0nerom@n0123dev'),
        ]);
    }
}
