<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Project ' . Str::random(5),
                'image' => 'backend/images/logo-header.svg',
                'description' => fake()->sentence(10),
                'github_link' => 'https://github.com/' . Str::random(8),
                'live_link' => 'https://example.com/' . Str::random(8),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Project ' . Str::random(5),
                'image' => 'backend/images/logo-header.svg',
                'description' => fake()->sentence(10),
                'github_link' => 'https://github.com/' . Str::random(8),
                'live_link' => 'https://example.com/' . Str::random(8),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
