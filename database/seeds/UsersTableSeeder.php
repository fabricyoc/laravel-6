<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Factory
        factory(User::class, 10)->create();

        //Seed
        // User::create([
        //     'name' => 'Fabricyo Costa',
        //     'email' => 'fazin_c@hotmail.com',
        //     'password' => bcrypt('123'),
        // ]);
    }
}
