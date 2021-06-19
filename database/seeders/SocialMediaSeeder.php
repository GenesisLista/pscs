<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add this array
        $name = [
            [
                'id' => 1,
                'name' => 'Facebook'
            ],
            [
                'id' => 2,
                'name' => 'Instagram'
            ],
            [
                'id' => 3,
                'name' => 'Invited/Referred by'
            ]
        ];

        foreach($name as $otherinfo) {
            SocialMedia::create($otherinfo);
        }
    }
}
