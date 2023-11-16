<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "title"         => "Test1",
                "summary"       => "Test1",
                "content"       => "Test1",
                "user_id"       => 2


            ],
            [
                "title"         => "Test2",
                "summary"       => "Test2",
                "content"       => "Test2",
                "user_id"       => 2

            ]

        ];

        DB::table('posts')->insert($posts);
    }
}
