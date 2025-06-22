<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoadmapTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roadmaps')->delete();

        $roadmaps = [

            ['id' => '1', 'name' => 'Roadmap 1', 'description' => 'Roadmap description 1', 'features' =>'Roadmap feature 1', 'goals'=>'Roadmap goal 1', 'milestones'=>'Roadmap milestone 1','status'=>'draft'],
            ['id' => '2', 'name' => 'Roadmap 2', 'description' => 'Roadmap description 2', 'features' =>'Roadmap feature 2', 'goals'=>'Roadmap goal 2', 'milestones'=>'Roadmap milestone 2','status'=>'processing'],
            ['id' => '3', 'name' => 'Roadmap 3', 'description' => 'Roadmap description 3', 'features' =>'Roadmap feature 3', 'goals'=>'Roadmap goal 3', 'milestones'=>'Roadmap milestone 3','status'=>'done'],
        ];

        DB::table('roadmaps')->insert($roadmaps);
    }
}