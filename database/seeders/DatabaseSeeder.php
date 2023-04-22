<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Address::create([
            'name' => 'ភូមិព្នៅ',
        ]);

        Customer::create([
            'enName' => 'Makara',
            'khName' => 'រៀន មករា',
            'rielCurrency' => '50000',
            'address_id' => 1
        ]);

    }
}
