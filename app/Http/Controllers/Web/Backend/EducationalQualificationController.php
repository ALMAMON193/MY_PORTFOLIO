<?php

namespace App\Http\Controllers\Web\Backend;

use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EducationalQualification;

class EducationalQualificationController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all educational qualifications and pass them to the view
        $educationalQualifications = EducationalQualification::orderBy('id', 'asc');

        // Handle search functionality
        if ($request->has('search') && !empty($request->search)) {
            $educationalQualifications->where('degree', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }

        // Get per_page value from request or set default to 10
        $perPage = $request->per_page ?? 10;

        // Paginate the results
        $educationalQualifications = $educationalQualifications->paginate($perPage);

        // Convert date fields to Carbon instances
        foreach ($educationalQualifications as $qualification) {
            $qualification->start_date = \Carbon\Carbon::parse($qualification->start_date);
            $qualification->end_date = $qualification->end_date ? \Carbon\Carbon::parse($qualification->end_date) : null;
        }

        return view('backend.layout.educational_qualification.index', compact('educationalQualifications'));
    }

    public function create()
    {
        return view('backend.layout.educational_qualification.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'institution_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'cgpa' => 'nullable|numeric|between:0,4.00',
            'certificate' => 'nullable|file|mimes:pdf,jpeg,jpg,png',
            'description' => 'nullable|string',
        ]);

        $certificateUrl = '';

        // If file is uploaded, handle the certificate file
        if ($request->hasFile('certificate')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('certificate'), 'qualification', $randomString);
        }

        // Create a new educational qualification record
        EducationalQualification::create($validated);

        return redirect()->route('admin.educational.qualification.index')
            ->with('success', 'Educational Qualification added successfully');
    }

    public function edit($id)
    {
        // Find the educational qualification to edit
        $educationalQualification = EducationalQualification::findOrFail($id);
        return view('backend.layout.educational_qualification.edit', compact('educationalQualification'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'degree' => 'required|string|max:255',
            'field_of_study' => 'nullable|string|max:255',
            'institution_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'cgpa' => 'nullable|numeric|between:0,4.00',
            'certificate' => 'nullable|file|mimes:pdf,jpeg,jpg,png',
            'description' => 'nullable|string',
        ]);

        // Find the educational qualification
        $educationalQualification = EducationalQualification::findOrFail($id);

        if ($request->hasFile('certificate')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('certificate'), 'certificate', $randomString);
            if ($educationalQualification->certificate) {
                $oldImagePath = public_path($educationalQualification->certificate);
                if (file_exists($oldImagePath)) {
                    Helper::fileDelete($oldImagePath);
                }
            }
            $educationalQualification->certificate = $imagePath;
        }
        EducationalQualification::findOrFail($id)->update($validated);

        return redirect()->route('admin.educational.qualification.index')
            ->with('success', 'Educational Qualification updated successfully');
    }
}