<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class trainstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->Azienda = $Faker->Azienda;
            $newTrain->Stazione_di_partenza = $Faker->Stazione_di_partenza;
            $newTrain->Stazione_di_arrivo = $Faker->Stazione_di_arrivo;
            $newTrain->Orario_di_Partenza = $Faker->Orario_di_Partenza;
            $newTrain->Orario_di_Arrivo = $Faker->Orario_di_Arrivo;
            $newTrain->Numero_Carrozza = $Faker->Numero_Carrozza;
        }
    }
}
