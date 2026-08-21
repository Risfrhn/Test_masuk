<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'code' => 'PRD-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => ucfirst($faker->words(3, true)),
                'price' => $faker->randomFloat(2, 10000, 1000000),
                'stock' => $faker->numberBetween(10, 100),
                'is_active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('products')->insert($data);
    }
}
