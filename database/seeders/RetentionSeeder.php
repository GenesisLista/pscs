<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Retention;

class RetentionSeeder extends Seeder
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
                'name' => 'Allow'
            ],
            [
                'id' => 2,
                'name' => 'Not Allow'
            ]
        ];

        foreach($name as $retention) {
            Retention::create($retention);
        }
    }
}
