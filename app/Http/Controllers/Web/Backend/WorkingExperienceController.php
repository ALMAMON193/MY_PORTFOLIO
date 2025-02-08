<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\WorkingExperience;
use Illuminate\Http\Request;

class WorkingExperienceController extends Controller
{


    public function index(Request $request)
    {
        $experiences = WorkingExperience::orderBy('id', 'asc');

        // Handle search functionality
        if ($request->has('search') && !empty($request->search)) {
            $experiences->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }

        // Get per_page value from request or set default to 10
        $perPage = $request->per_page ?? 10;

        // Paginate the results
        $experiences = $experiences->paginate($perPage);

        // Pass the paginated data to the view
        return view('backend.layout.working_experience.index', compact('experiences'));
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
}