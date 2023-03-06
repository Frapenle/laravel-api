<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Super Admin', 'Admin', 'Editor', 'User'];
        $a = 0;
        while ($a <= 3) {
            Role::create([
                'name' => $roles[$a],
            ]);
            $a++;
        }
    }
}
