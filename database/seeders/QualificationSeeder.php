<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationalQualification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create a seeder in the database
        EducationalQualification::create([
            'degree' => 'Bachelor of Science in Computer Science',
            'field_of_study' => 'Computer Science',
            'institution_name' => 'University of Dhaka',
            'location' => 'Dhaka, Bangladesh',
            'start_date' => '2018-01-01',
            'end_date' => '2022-05-01',
            'cgpa' => '3.88',
            'certificate' => 'https://www.dropbox.com/s/71x9xhazv3q4q4j/graduation-certificate.pdf?dl=0',
            'description' => 'This is a description of my educational qualification. I completed my BSc in Computer Science from the University of Dhaka. I was a brilliant student and had a CGPA of 3.88 out of 4.00. I got a certificate from the university which is available at the following link: https://www.dropbox.com/s/71x9xhazv3q4q4j/graduation-certificate.pdf?dl=0.',
        ]);
    }
}
