<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $companies = [
            'Trenitalia',
            'Italo',
            'SNCF',
            'Deutsche Bahn',
            'Renfe',
            'Amtrak'
        ];
        //creare i treni con il generatore di dati fitizzi Faker
        for($i = 0; $i < 20; $i++){
            // creo un nuovo treno
            $newTrain = new Train;

            //poplo i campi del nuovo treno con il faker
            $newTrain->company = $faker->randomElements($companies)[0];
            $newTrain->departure_station = $faker->name();
            $newTrain->arrival_station = $faker->name();
            $newTrain->departure_time = $faker->time();
            $newTrain->departure_date = $faker->date();
            $newTrain->arrival_time = $faker->time();
            $newTrain->arrival_date = $faker->date();
            $newTrain->train_code = $faker->numberBetween(100, 999);
            $newTrain->carriage_number = $faker->randomDigit();
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            //salvo il treno nel DB
            $newTrain->save();
        };



        // per creare a mano un singolo treno
        // Train::create([
        //     'company' => 'trenitalia',
        //     'departure_station' => 'Milano Centrale',
        //     'arrival_station' => 'Roma Termini',
        //     'departure_time' => '19:30:00',
        //     'departure_date' => '21/09/24',
        //     'arrival_time' => '12:12:00',
        //     'arrival_date' => '22/09/24',
        //     'train_code' => 33535,
        //     'carriage_number' => 10,
        //     'in_time' => true,
        //     'deleted' => false,
        // ]);
    }
}
