<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tweet;
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
        // chaine avec la methode each => chaque utilisateur aura plusieurs tweets (5)
         \App\Models\User::factory(10)->create()->each(
             fn ($user) => $user->tweets()->saveMany(\App\Models\Tweet::factory(5)->make()));// function fleche de php sinon function($user){}
    }
}
