<?php

namespace Database\Seeders;

use App\Models\MySkill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MySkill::create([
            'name' => 'HTML',
            'skill_type' => 'front-end',
            'icon' => 'fa-brands fa-html5',
            'description' => 'I am familiar with HTML5. I know how to use semantic HTML for structuring a web page.',
            'percentage' => 80,
        ]);
        MySkill::create([
            'name' => 'HTML',
            'skill_type' => 'front-end',
            'icon' => 'fa-brands fa-html5',
            'description' => 'I am familiar with HTML5. I know how to use semantic HTML for structuring a web page.',
            'percentage' => 80,
        ]);
        MySkill::create([
            'name' => 'HTML',
            'skill_type' => 'front-end',
            'icon' => 'fa-brands fa-html5',
            'description' => 'I am familiar with HTML5. I know how to use semantic HTML for structuring a web page.',
            'percentage' => 80,
        ]);
        MySkill::create([
            'name' => 'HTML',
            'skill_type' => 'front-end',
            'icon' => 'fa-brands fa-html5',
            'description' => 'I am familiar with HTML5. I know how to use semantic HTML for structuring a web page.',
            'percentage' => 80,
        ]);
        MySkill::create([
            'name' => 'HTML',
            'skill_type' => 'front-end',
            'icon' => 'fa-brands fa-html5',
            'description' => 'I am familiar with HTML5. I know how to use semantic HTML for structuring a web page.',
            'percentage' => 80,
        ]);
    }
}
