<?php

namespace Database\Seeders;
use App\Models\MissionVission;
use Illuminate\Database\Seeder;

class MissionVissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'mission' => 'Our mission is to provide high-quality education...',
                'vission' => 'Our vision is to become a leading institution...',
            ],

        ];

        // Loop through the data and insert into the 'mission_vissions' table
        foreach ($data as $item) {
            MissionVission::create($item);
        }
    }
}
