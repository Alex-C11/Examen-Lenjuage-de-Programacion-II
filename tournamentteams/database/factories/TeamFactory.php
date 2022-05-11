<?php

namespace Database\Factories;

use App\Models\tournament;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->unique()->word(20);
        return [
            'name'=>$name,
            'description'=>$this->faker->text(2000),
            'type'=>$this->faker->randomElement([1,2]),
            'color'=>Str::slug($name),
            'status'=>Str::slug($name),
            'tournament_id'=>tournament::all()->random()->id,
        ];
    }
}
