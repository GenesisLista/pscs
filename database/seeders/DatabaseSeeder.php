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
        $this->call(SocialMediaSeeder::class); // Social Media Seeder
        $this->call(RetentionSeeder::class); // Retention Seeder
        $this->call(EducationalAttainmentSeeder::class); // Educational Attainment
    }
}
