<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\team as ModelsTeam;
use App\Models\tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        team::factory(6)->create();
        tournament::factory(5)->create();
        $this->call(TeamSeeder::class);
        $this->call(TournamentSeeder::class);
    }
}
