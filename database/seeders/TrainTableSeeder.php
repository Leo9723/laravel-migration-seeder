<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;


class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){

            $newTrain = new Train();

            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->word();
            $newTrain->stazione_di_arrivo = $faker->word();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomNumber(9, true);
            $newTrain->numero_carrozze = $faker->randomNumber(2, false);
            $newTrain->in_orario = $faker->randomElement(['si', 'no']);
            $newTrain->cancellato = $faker->randomElement(['si', 'no']);

            $newTrain->save();

        }
    }
}
