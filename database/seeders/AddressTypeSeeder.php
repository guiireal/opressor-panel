<?php

namespace Database\Seeders;

use App\Models\AddressType;
use Illuminate\Database\Seeder;

class AddressTypeSeeder extends Seeder
{
    public function run()
    {
        AddressType::query()->create(
            ['name' => 'Residencial'],
        );

        AddressType::query()->create(
            ['name' => 'Comercial'],
        );

        AddressType::query()->create(
            ['name' => 'Outros'],
        );
    }
}
