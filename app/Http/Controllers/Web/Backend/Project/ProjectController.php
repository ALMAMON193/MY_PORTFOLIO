<?php

namespace App\Http\Controllers\Web\Backend\Project;

use App\Helpers\Helper;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::orderBy('id', 'desc');

        // Handle search functionality
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('description', 'LIKE', "%{$request->search}%");
        }

        // Get per_page value from request or set default to 10
        $perPage = $request->per_page ?? 10;
        $data = $query->paginate($perPage);

        // Check if the request is AJAX, return only the updated table
        if ($request->ajax()) {
            return response()->json([
                'html' => view('backend.layout.Project.partials.table', compact('data'))->render()
            ]);
        }

        return view('backend.layout.Project.index', compact('data'));
    }


    public function create()
    {
        return view('backend.layout.Project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'video' => 'nullable|mimes:mp4,ogg,webm',


        ]);

        // File upload handling
        $imagePath = null;
        $videoPath = null;

        if ($request->hasFile('image')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('image'), 'project/image', $randomString);
        }
        if ($request->hasFile('video')) {
            $randomString = Str::random(10);
            $videoPath = Helper::fileUpload($request->file('video'), 'project/video', $randomString);
        }
        $project = new Project();
        $project->name = $request->name;
        $project->image = $imagePath;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->live_link = $request->live_link;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->video = $videoPath;
        $project->save();

        return redirect()->route('admin.project.index')->with('t-success', 'Project created successfully.');
    }

    public function edit($id)
    {

        $data = Project::find($id);
        return view('backend.layout.Project.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $projects = Project::find($id);
        $projects->name = $request->name;
        if ($request->hasFile('image')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('image'), 'adventure/type', $randomString);
            if ($projects->image) {
                $oldImagePath = public_path($projects->image);
                if (file_exists($oldImagePath)) {
                    Helper::fileDelete($oldImagePath);
                }
            }
            $projects->image = $imagePath;
        }
        $projects->save();

        return redirect()->route('admin.project.index')->with('t-success', 'Drill updated successfully.');
    }

    public function destroy($id)
    {
        $drill = Project::findOrFail($id);
        if (!$drill) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        if ($drill->image) {
            $oldImagePath = public_path($drill->image);
            if (file_exists($oldImagePath)) {
                Helper::fileDelete($oldImagePath);
            }
        }
        $drill->delete();
        return response()->json(['t-success' => true, 'message' => 'Deleted successfully.']);
    }


    public function status($id)
    {
        $data = Project::where('id', $id)->first();
        if ($data->status == 'Active') {
            $data->status = 'Inactive';
            $data->save();
            return response()->json([
                'success' => false,
                'message' => 'Unpublished Successfully.',
                'data' => $data,
            ]);
        } else {
            $data->status = 'Active';
            $data->save();
            return response()->json([
                'success' => true,
                'message' => 'Published Successfully.',
                'data' => $data,
            ]);
        }
    }
}
