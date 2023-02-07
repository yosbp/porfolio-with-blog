<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Yosmar Barco',
            'email' => 'yosbp1@gmail.com',
            'password' => bcrypt('20304808'),
        ])->assignRole(['Admin']);

        /* User::factory(99)->create(); */
    }
}
