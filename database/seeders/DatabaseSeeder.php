<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        $this->call(ProjectsTableSeeder::class);
        $this->call(UserSeeder::class);
//        $this->call(QualificationSeeder::class);
//        $this->call(class: SkillSeeder::class);
//        $this->call(ServiceSeeder::class);
    }
}
