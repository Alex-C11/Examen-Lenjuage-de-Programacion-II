<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->word(10);
        return [
            'name'=>$name,
            'description'=>$this->faker->text(2000),
            'datestart'=>Str::slug($name),
            'dateend'=>Str::slug($name),
            'rules'=>$this->faker->text(210),
        ];
    }
}
