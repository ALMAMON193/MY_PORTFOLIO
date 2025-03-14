<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use Illuminate\Http\Request;
use App\Models\WorkingExperience;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class WorkingExperienceController extends Controller
{


    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = WorkingExperience::latest()->get();
                return DataTables::of($data)
                    ->addIndexColumn()

                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.working.experience.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.working.experience.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"> Delete</i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('backend.layout.working_experience.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function create()
    {
        return view('backend.layout.working_experience.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'job_description' => 'nullable|string',
            'employment_type' => 'nullable|string',
        ]);

        WorkingExperience::create($validated);

        return redirect()->route('admin.working.experience.index')->with('success', 'Working experience added successfully!');
    }

    public function edit($id)
    {
        $experiences = WorkingExperience::findOrFail($id);
        return view('backend.layout.working_experience.edit', compact('experiences'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'job_description' => 'nullable|string',
            'employment_type' => 'nullable|string',
        ]);

        // Find the experience by ID and update
        WorkingExperience::findOrFail($id)->update($validated);

        // Redirect with success message
        return redirect()->route('admin.working.experience.index')->with('success', 'Data updated successfully');
    }
    public function destroy($id)
    {
        WorkingExperience::findOrFail($id)->delete();
        return redirect()->route('admin.working.experience.index')->with('success', 'Data deleted successfully');
    }
    public function view($id)
    {
        $experiences = WorkingExperience::findOrFail($id);
        return view('backend.layout.working_experience.view', compact('experiences'));
    }
}
