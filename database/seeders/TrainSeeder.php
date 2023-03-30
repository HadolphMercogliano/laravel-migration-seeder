<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $new_train = new Train;
      
      $new_train->azienda = $faker->randomElement(['italo', 'trenitalia']);
      $new_train->stazione_partenza = $faker->city();
      $new_train->stazione_arrivo = $faker->city();
      $new_train->data_partenza = $faker->dateTimeBetween('-0 week', '+1 week');
      $new_train->orario_partenza = $faker->time();
      $new_train->orario_arrivo = $faker->time();
      $new_train->codice_treno = $faker->numberBetween(9900, 9999);
      $new_train->n_carrozze = $faker->numberBetween(10, 12);
      $new_train->in_orario = $faker->boolean();
      $new_train->cancellato = $faker->boolean();
      $new_train->save(); 
    }
}