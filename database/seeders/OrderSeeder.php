<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker\Factory as Faker;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        //
        $faker = Faker::create();
        Order::create([
            'client' => $faker->company,
            'destination' => $faker->city,
            'exporter' => $faker->company,
            'date' => $faker->date(),
            'notes' => $faker->sentence(6),
        ]);
    }
}
