<?php

namespace Database\Seeders;

use App\Models\team;
use App\Models\Team as ModelsTeam;
use App\Models\tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team=team::factory(5)->create();
    }

}
