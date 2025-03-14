<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Project One Project One Project One Project One Project One  ',
                'description' => 'This is the first project.',
                'github_link' => 'https://github.com/user/project1',
                'live_link' => 'https://project1.example.com',
                'status' => 'Active',
                'start_date' => '2022-01-01',
                'end_date' => '2022-01-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Two',
                'description' => 'This is the second project.',
                'github_link' => 'https://github.com/user/project2',
                'live_link' => 'https://project2.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-02-01',
                'end_date' => '2022-02-28',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Three',
                'description' => 'This is the third project.',
                'github_link' => 'https://github.com/user/project3',
                'live_link' => 'https://project3.example.com',
                'status' => 'Active',
                'start_date' => '2022-03-01',
                'end_date' => '2022-03-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Four',
                'description' => 'This is the fourth project.',
                'github_link' => 'https://github.com/user/project4',
                'live_link' => 'https://project4.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-04-01',
                'end_date' => '2022-04-30',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Five',
                'description' => 'This is the fifth project.',
                'github_link' => 'https://github.com/user/project5',
                'live_link' => 'https://project5.example.com',
                'status' => 'Active',
                'start_date' => '2022-05-01',
                'end_date' => '2022-05-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Six',
                'description' => 'This is the sixth project.',
                'github_link' => 'https://github.com/user/project6',
                'live_link' => 'https://project6.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-06-01',
                'end_date' => '2022-06-30',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Seven',
                'description' => 'This is the seventh project.',
                'github_link' => 'https://github.com/user/project7',
                'live_link' => 'https://project7.example.com',
                'status' => 'Active',
                'start_date' => '2022-07-01',
                'end_date' => '2022-07-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Eight',
                'description' => 'This is the eighth project.',
                'github_link' => 'https://github.com/user/project8',
                'live_link' => 'https://project8.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-08-01',
                'end_date' => '2022-08-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Nine',
                'description' => 'This is the ninth project.',
                'github_link' => 'https://github.com/user/project9',
                'live_link' => 'https://project9.example.com',
                'status' => 'Active',
                'start_date' => '2022-09-01',
                'end_date' => '2022-09-30',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Ten',
                'description' => 'This is the tenth project.',
                'github_link' => 'https://github.com/user/project10',
                'live_link' => 'https://project10.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-10-01',
                'end_date' => '2022-10-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Eleven',
                'description' => 'This is the eleventh project.',
                'github_link' => 'https://github.com/user/project11',
                'live_link' => 'https://project11.example.com',
                'status' => 'Active',
                'start_date' => '2022-11-01',
                'end_date' => '2022-11-30',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Project Twelve',
                'description' => 'This is the twelfth project.',
                'github_link' => 'https://github.com/user/project12',
                'live_link' => 'https://project12.example.com',
                'status' => 'Inactive',
                'start_date' => '2022-12-01',
                'end_date' => '2022-12-31',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
