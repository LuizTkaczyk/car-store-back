<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            ['brand' => 'Fiat'],
            ['brand' => 'Chevrolet'],
            ['brand' => 'Volkswagen'],
        ]);
    }
}
