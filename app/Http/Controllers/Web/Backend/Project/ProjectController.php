<?php

namespace App\Http\Controllers\Web\Backend\Project;

use Exception;
use App\Helpers\Helper;
use App\Models\Project;
use Illuminate\Support\Str;
use App\Models\ProjectImage;
use App\Models\ProjectVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{

    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Project::orderBy('id', 'desc')->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('status', function ($data) {
                        $status = '<div class="dropdown">';
                        $status .= '<button class="btn btn-sm ' . ($data->status == 'Active' ? 'btn-success' : 'btn-danger') . ' dropdown-toggle" type="button" id="dropdownStatus' . $data->id . '" data-bs-toggle="dropdown" aria-expanded="false">';
                        $status .= $data->status;
                        $status .= '</button>';
                        $status .= '<ul class="dropdown-menu" aria-labelledby="dropdownStatus' . $data->id . '">';
                        $status .= '<li><a class="dropdown-item " href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'active\')">Active</a></li>';
                        $status .= '<li><a class="dropdown-item" href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'inactive\')">Inactive</a></li>';
                        $status .= '</ul>';
                        $status .= '</div>';

                        return $status;
                    })

                    ->addColumn('action', function ($data) {
                        return '<a href="" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.project.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"></i> Delete</a>';
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
            }
            return view('backend.layout.Project.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function create()
    {
        return view('backend.layout.Project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|array',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'start_date' => 'required|string',
            'end_date' => 'required|string|after_or_equal:start_date',
            'video.*' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:512000',
        ]);

        try {
            // Create project
            $project = new Project();
            $project->name = $request->name;
            $project->description = $request->description;
            $project->github_link = $request->github_link;
            $project->live_link = $request->live_link;
            $project->start_date = $request->start_date;
            $project->end_date = $request->end_date;
            $project->save();

            // Handle image uploads
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $imagePath = Helper::fileUpload($image, 'projects/images', $image->getClientOriginalName());
                    ProjectImage::create([
                        'project_id' => $project->id,
                        'image' => $imagePath,
                    ]);
                }
            }
            // Handle video uploads
            if ($request->hasFile('video')) {
                foreach ($request->file('video') as $video) {
                    $videoPath = Helper::fileUpload($video, 'projects/videos', $video->getClientOriginalName());
                    ProjectVideo::create([
                        'project_id' => $project->id,
                        'video' => $videoPath,
                    ]);
                }
            }
            return redirect()->route('admin.project.index')->with('t-success', 'Project created successfully.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('t-error', 'Something went wrong. Please try again.');
        }
    }


    public function edit($id)
    {

        $data = Project::find($id);
        $projectImages = ProjectImage::where('project_id', $id)->get();
        $projectVideos = ProjectVideo::where('project_id', $id)->get();
        return view('backend.layout.Project.edit', compact('data', 'projectImages', 'projectVideos'));
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
            $imagePath = Helper::fileUpload($request->file('image'), 'projects/videos', $randomString);
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

    public function deleteImage($id)
    {
        // Find the image by ID
        $image = ProjectImage::findOrFail($id);

        if ($image) {
            Helper::fileDelete(public_path($image->image));
        }
        // Delete the image record from the database
        $image->delete();

        // Return a success response
        return response()->json(['success' => true]);
    }

    public function deleteVideo($id)
    {
        // Find the video by ID
        $video = ProjectVideo::findOrFail($id);
        if ($video) {
            Helper::fileDelete(public_path($video->video));
        }
        $video->delete();
        // Return a success response
        return response()->json(['success' => true]);
    }
}
