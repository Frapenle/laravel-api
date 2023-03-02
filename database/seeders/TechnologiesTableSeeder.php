<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['Html', 'Css', 'Javascript', 'Php', 'Bootstrap', 'Laravel 9', 'Scss', 'VueJS 3', 'MySQL', 'Tailwind', 'Nod.js'];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->color = $faker->unique()->hexColor();
            $newTechnology->save();
        }
    }
}
