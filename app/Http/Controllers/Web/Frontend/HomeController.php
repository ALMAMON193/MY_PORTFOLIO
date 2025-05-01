<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Models\Contact;
use App\Models\MySkill;
use App\Models\Project;
use App\Models\Service;
use App\Models\ProjectImage;
use App\Models\ProjectVideo;
use Illuminate\Http\Request;
use App\Models\ProjectFeature;
use App\Models\ProjectTechnology;
use App\Models\WorkingExperience;
use App\Models\PersonalInformation;
use App\Http\Controllers\Controller;
use App\Models\EducationalQualification;
use Illuminate\Support\Facades\Validator;
use App\Models\ProjectChallengesAndSolution;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy("created_at", "asc")->get();
        $projects = Project::orderBy("created_at", "desc")->take(9)->get();
        $personal_info = PersonalInformation::first();
        $educational_qualifications = EducationalQualification::orderBy("created_at", "asc")->get();
        $data = [
            "services" => $services,
            "projects" => $projects,
            "personal_info" => $personal_info,
            "educational_qualifications" => $educational_qualifications,
        ];
        return view("frontend.layout.index", $data);
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

    public function show($id)
    {
        $project = Project::with(['images', 'videos','features', 'technologies', 'challenges'])->findOrFail($id);
        return view('frontend.layout.portfolio.details', compact('project'));
    }
    
}
