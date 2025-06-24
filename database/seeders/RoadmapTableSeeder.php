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

            ['id' => '1', 'name' => 'complete web development', 'description' => 'The process of building and maintaining websites or web applications.', 'features' =>'Journey with industry experts', 'goals'=>'ceo', 'milestones'=>'Learner needs 6 month time period','status'=>'draft'],
            ['id' => '2', 'name' => 'software engineering', 'description' => 'The systematic design, development, testing, and maintenance of software systems.', 'features' =>'Journey with industry experts and teachers', 'goals'=>'team leader', 'milestones'=>'Learner needs 1 year time period','status'=>'processing'],
            ['id' => '3', 'name' => 'ai and machine learning', 'description' => 'The simulation of human intelligence in machines to perform tasks like learning, reasoning, and decision-making.', 'features' =>'Journey with reseachers', 'goals'=>'ai engineer', 'milestones'=>'Learner needs 8 month time period','status'=>'done'],
        ];

        DB::table('roadmaps')->insert($roadmaps);
    }
}