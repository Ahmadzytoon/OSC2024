<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'team_name' => 'Phytobase',
            'description' => "A Technological system based on the Internet of Things and artificial intelligence in the agricultural sector saves (60%) of public consumption in the irrigation process and (40%) of the fertilization process. Thus reducing operational costs and increasing production.",
        ]);
        DB::table('teams')->insert([
            'team_name' => 'DeepSea Explorer',
            'description' => 'Deep Sea Explorer is a project that offers underwater filming and exploration services. The services include filming people underwater using drones, live underwater broadcasting, and collecting scientific data for research. Additionally, an advanced service will be provided, allowing underwater robot control via Virtual Reality (VR) technology to offer a virtual diving experience.',
        ]);
        DB::table('teams')->insert([
            'team_name' => 'Saver Bot',
            'description' => "This project aims to create an innovative quadruped robot specifically designed for search and rescue operations in environments affected by natural disasters, such as earthquakes, or in conflict zones. The remote-controlled robot will be equipped with a thermal camera capable of detecting the heat emitted by people trapped under rubble and debris. It utilizes artificial intelligence to efficiently identify survivors, even in challenging conditions. The robot's design focuses on moving robustly over rough and uneven terrain, making it a valuable tool for emergency responders in their mission to locate and rescue individuals in need.",
        ]);
        DB::table('teams')->insert([
            'team_name' => 'ARFL',
            'description' => "The goal of this project is to develop a robot capable of identifying potholes in the streets, measuring them, calculating the appropriate amount of materials to fill them, then mixing the materials and filling the potholes, and leveling them, and use the AI to detect location and size of potholes using Camera and laser Sensor.",
        ]);
    }

}

