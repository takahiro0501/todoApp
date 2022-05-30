<?php

namespace Database\Seeders;

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
        $this->call(ApusersTableSeeder::class);
        $this->call(FirstGoalsTableSeeder::class);
        $this->call(SecondGoalsTableSeeder::class);
        $this->call(DayTaskTableSeeder::class);
        $this->call(WeekTaskTableSeeder::class);

    }
}
