<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Models
use App\Models\EducationalAttainment;

class EducationalAttainmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add this array
        $education = [
            [
                'id' => 1,
                'name' => 'College Level'
            ],
            [
                'id' => 2,
                'name' => 'College Graduate'
            ]
        ];

        foreach($education as $educ)
        {
            EducationalAttainment::create($educ);
        }
    }
}
