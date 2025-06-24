<?php

namespace Database\Seeders;

use Dom\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //seeder function
    public function run(): void
    {
        Model::unguard();
        $this->call(RoadmapTableSeeder::class);
        
        Model::reguard();
    }

    /*public function run(): void
    {
        Model::unguard();
        $this->call(CommentTableSeeder::class);
        Model::reguard();
    }
        */

        /*public function run(): void
    {
        Model::unguard();
        $this->call(VoteTableSeeder::class);
        Model::reguard();
    }
        */
}
