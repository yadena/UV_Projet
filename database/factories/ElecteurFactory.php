<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Electeur;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Electeur>
 */
class ElecteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Electeur::class;
    public function definition(): array
    {
        return [
            //public function definition()
  

        'nom' => $this->faker->name(),
        'faculte' => $this->faker->faculte(3),
        'filiere' => $this->faker->filiere(8),
        'niveau' => $this->faker->niveau(),
        'matricule' => $this->faker->matricule()
      
     
        ];
    }
}
