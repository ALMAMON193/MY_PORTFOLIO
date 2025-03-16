<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\Contact;
use App\Models\MySkill;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\WorkingExperience;
use App\Models\PersonalInformation;
use App\Http\Controllers\Controller;
use App\Models\EducationalQualification;
use Illuminate\Support\Facades\Validator;

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
        $portfolio = Project::orderBy("created_at", "desc")->get();
        return view('frontend.layout.portfolio.index', compact('portfolio'));
    }
    public function service()
    {
        $services = Service::orderBy("created_at", "desc")->get();
        $user_ask = Contact::orderBy("created_at", "desc")->get();
        return view('frontend.layout.service.index', compact('services', 'user_ask'));
    }
    public function blog()
    {
        return view('frontend.layout.blog.index');
    }
    public function contact()
    {
        return view('frontend.layout.contact.index');
    }
    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save to database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Return success response
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function portfolioDetails($id)
    {
        $project = Project::find($id);
        return view('frontend.layout.portfolio.details', compact('project'));
    }
}
