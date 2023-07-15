<?php

namespace Database\Factories;
use app\Models\Candidat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    protected $model = Candidat::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name'=>$this->faker->name,
            'prenom'=>$this->faker->lastName,
            'DateNaissance'=>$this->faker->date,
            'matricule'=>$this->faker->numerify('CM-UDS-#####'),
            'faculte'=>$this->faker->name,
            'filiere'=>$this->faker->name,
            'niveau'=>$this->faker->number(1,7),
            'motivation'=>$this->faker->sentence(2),

            'create_at'=>now()


        ];
    }
}
