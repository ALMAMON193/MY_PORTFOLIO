<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\EducationalQualification;

class EducationalQualificationController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = EducationalQualification::orderBy('id', 'desc')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.educational.qualification.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.educational.qualification.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"> Delete</i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view("backend.layout.educational_qualification.index");
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
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
            $certificateUrl = Helper::fileUpload($request->file(key: 'certificate'), 'qualification', $randomString);
        }

        // Create a new educational qualification record
        EducationalQualification::create([
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'institution_name' => $request->institution_name,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cgpa' => $request->cgpa,
            'certificate' => $certificateUrl,
            'description' => $request->description,
        ]);

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

        // Update educational qualification details
        $educationalQualification->update([
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'institution_name' => $request->institution_name,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cgpa' => $request->cgpa,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.educational.qualification.index')
            ->with('success', 'Educational Qualification updated successfully');
    }

    public function view($id)
    {
        $educationalQualification = EducationalQualification::findOrFail($id);
        return view('backend.layout.educational_qualification.view', compact('educationalQualification'));
    }
    public function delete($id)
    {
        $educationalQualification = EducationalQualification::findOrFail($id);
        if ($educationalQualification->certificate) {
            Helper::fileDelete(public_path($educationalQualification->certificate));
        }
        $educationalQualification->delete();
        return redirect()->route('admin.educational.qualification.index')
            ->with('success', 'Educational Qualification deleted successfully');
    }
}
