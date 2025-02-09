<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EducationalQualification;
use App\Models\MySkill;
use App\Models\PersonalInformation;
use App\Models\WorkingExperience;

class HomeController extends Controller
{
    public function about()
    {
        $personal_info = PersonalInformation::orderBy("created_at", "desc")->first();
        $working_info = WorkingExperience::orderBy("created_at", "desc")->get();
        $education_info = EducationalQualification::orderBy("created_at", "desc")->get();
        $myskill_info = MySkill::orderBy("created_at", "desc")->get();
        return view('frontend.layout.about.index', compact('personal_info', 'working_info', 'education_info', 'myskill_info'));
    }
    public function portfolio()
    {
        return view('frontend.layout.portfolio.index');
    }
    public function service()
    {
        return view('frontend.layout.service.index');
    }
    public function blog()
    {
        return view('frontend.layout.blog.index');
    }
    public function contact()
    {
        return view('frontend.layout.contact.index');
    }
}
