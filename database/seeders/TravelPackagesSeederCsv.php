<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Exception;

class TravelPackagesSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // metto in una variabile il file csv e lo apro con fopen e il parametro r che specifica che è solo in lettura
        $csvFile = fopen(__DIR__ . '/travel_packages.csv', 'r');

            $i = 0;

            while(($row = fgetcsv($csvFile)) !== false){
                if($i > 0){

                    $newTravelPackage = new TravelPackage();
                    $newTravelPackage->destination = $row[0];
                    $newTravelPackage->night_n = $row[1];
                    $newTravelPackage->price = $row[2];
                    $newTravelPackage->departure_date = $row[3];
                    $newTravelPackage->included_services = $row[4];
                    $newTravelPackage->save();
                }
                $i++;
            }
            fclose($csvFile);
    }
}
