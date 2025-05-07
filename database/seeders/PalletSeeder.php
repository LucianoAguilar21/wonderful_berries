<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Pallet;
use Faker\Factory as Faker;
class PalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Iterar sobre cada orden existente
        foreach (Order::all() as $order) {
            $palletCount = rand(1, 5); // Entre 1 y 5 pallets por orden

            foreach (range(1, $palletCount) as $i) {
                Pallet::create([
                    'order_id' => $order->id,
                    'pallet_number' => $faker->unique()->numberBetween(1000, 9999),
                    'field_number' => $faker->randomElement([100, 101, 103, 104]),
                    'box_count' => $faker->numberBetween(180, 240),
                    'lot' => $faker->regexify('[A-Z]{2}[0-9]{3}'),
                    'pot_size' => $faker->randomElement(['6oz', '12oz']),
                ]);
            }
        }
    }
}
