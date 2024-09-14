<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TravelPackage;
use Faker\Generator as Faker;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i = 0; $i < 20; $i++){

            $newTravelPackage = new TravelPackage();

            $newTravelPackage->destination = $faker->state();
            $newTravelPackage->night_n = $faker->randomDigit;
            $newTravelPackage->price = $faker->randomFloat(2, 100, 999);
            $newTravelPackage->departure_date = $faker->date();
            $newTravelPackage->included_services = $faker->randomElement(['volo', 'pasti', 'escursioni', 'trasferimenti']);
            $newTravelPackage->save();
        }


    }
}
