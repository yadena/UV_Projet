<?php

namespace Database\Seeders;
use \App\Models\Candidat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i =1; $i <= 15; $i++)
        {

            $candidat = new Candidat;
            $candidat->nom = $faker->firstName();
            $candidat->prenom = $faker->lastName;
            $candidat->DateNaissance = $faker->date;
            $candidat->matricule = $faker->numerify('CM-UDS-#####');
            $candidat->faculte = $faker->lastName;
            $candidat->filiere = $faker->lastName;
            $candidat->niveau = $faker->numberBetween(1,7);
            $candidat->motivation = $faker->sentence(4);
            $candidat->save();
        }

    }
}
