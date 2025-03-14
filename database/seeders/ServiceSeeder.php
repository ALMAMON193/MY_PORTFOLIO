<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Laravel Web Development',
                'description' => 'Building scalable and secure web applications using Laravel.',
                'image' => 'uploads/services/laravel.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'API Development',
                'description' => 'Creating RESTful and GraphQL APIs for seamless data exchange.',
                'image' => 'uploads/services/api.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'E-commerce Solutions',
                'description' => 'Developing feature-rich e-commerce platforms with secure payment integrations.',
                'image' => 'uploads/services/ecommerce.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Authentication & Security',
                'description' => 'Implementing secure authentication and authorization for web applications.',
                'image' => 'uploads/services/security.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Website Optimization & Debugging',
                'description' => 'Enhancing website speed, performance, and fixing critical bugs.',
                'image' => 'uploads/services/optimization.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('services')->insert($services);
    }
}
