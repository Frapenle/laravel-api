<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();
        //The pluck method retrieves all of the values for a given key, id in this case
        $rolesId = Role::all()->pluck('id');
        foreach ($users as $user) {
            $user->roles()->attach($faker->randomElements($rolesId, 1));
        }
    }
}
