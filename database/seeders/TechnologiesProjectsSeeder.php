<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Technology;

class TechnologiesProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $projects = Project::all();

        $technologyIds = Technology::all()->pluck('id');

        foreach ($projects as $project) {
            $project->technologies()->attach($faker->randomElements($technologyIds, 3));
        }
    }
}
