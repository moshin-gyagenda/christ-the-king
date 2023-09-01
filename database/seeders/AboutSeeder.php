<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aboutsData = [
            [
                'tittle' => 'About Us tittleTitle 1',
                'approach' => 'Our Approach Details 1',
                'values' => 'Our Values Details 1',
                'commitment' => 'Our Commitment Details 1',
                'community_engagement' => 'Community Engagement Details 1',
                'description' => 'Description Details 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tittle' => 'About Us tittle 2',
                'approach' => 'Our Approach Details 2',
                'values' => 'Our Values Details 2',
                'commitment' => 'Our Commitment Details 2',
                'community_engagement' => 'Community Engagement Details 2',
                'description' => 'Description Details 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more data as needed
        ];

        DB::table('abouts')->insert($aboutsData);
    }
}
