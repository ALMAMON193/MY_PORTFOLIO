<?php

namespace App\Http\Controllers\Web\Backend\Project;

use Exception;
use App\Models\User;
use App\Helpers\Helper;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectVideo;
use Illuminate\Http\Request;
use App\Models\ProjectFeature;
use App\Models\ProjectTechnology;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Models\ProjectChallengesAndSolution;


class ProjectController extends Controller
{
    public function list()
    {
        $users = User::all();
        return response()->json(['users' => $users]);
    }
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
                        $status .= '<li><a class="dropdown-item" href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'active\')">Active</a></li>';
                        $status .= '<li><a class="dropdown-item" href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'inactive\')">Inactive</a></li>';
                        $status .= '</ul>';
                        $status .= '</div>';

                        return $status;
                    })
                    ->addColumn('live_link', function ($data) {
                        return '<a href="' . $data->live_link . '" target="_blank" class="btn btn-info btn-sm">
                                    <i class="ri-external-link-line"></i> Live
                                </a>';
                    })

                    ->addColumn('github_link', function ($data) {
                        return '<a href="' . $data->github_link . '" target="_blank" class="btn btn-dark btn-sm">
                                    <i class="ri-github-line"></i> GitHub
                                </a>';
                    })

                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.project.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.project.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"> Delete</i></a>';
                    })
                    ->rawColumns(['action', 'status', 'live_link', 'github_link'])
                    ->make(true);
            }
            return view('backend.layout.Project.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('backend.layout.Project.create');
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|array|max:10', // Max 10 images
            'image.*' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:1048576' // 1GB in kilobytes (1024 * 1024)
            ],
            'description' => 'required',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'video' => 'nullable|array|max:3', // Max 3 videos
            'video.*' => ['nullable', 'file', 'mimes:mp4,mov,avi,mkv', 'max:1048576'], // 1GB in kilobytes],
            'category' => 'required|string|max:255',
            'repository' => 'nullable|in:private,public',
            'team_size' => 'nullable|integer|min:1',

            // Features validation
            'feature_name' => 'required|array|min:1',
            'feature_name.*' => 'required|string|max:255',
            'feature_description.*' => 'nullable|string',

            // Technologies validation
            'technology_name' => 'required|array|min:1',
            'technology_name.*' => 'required|string|max:255',
            'icon.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // Challenges validation
            'challenge_name' => 'required|array|min:1',
            'challenge_name.*' => 'required|string|max:255',
            'problem_description.*' => 'nullable|string',
            'solution_description.*' => 'nullable|string',
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
            $project->category = $request->category;
            $project->repository = $request->repository;
            $project->team_size = $request->team_size;
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

            // Save project features
            if ($request->has('feature_name')) {
                foreach ($request->feature_name as $index => $featureName) {
                    ProjectFeature::create([
                        'project_id' => $project->id,
                        'feature_name' => $featureName,
                        'feature_description' => $request->feature_description[$index] ?? null,
                    ]);
                }
            }

            // Save project technologies
            // Save project technologies
            if ($request->has('technology_name')) {
                foreach ($request->technology_name as $index => $techName) {
                    $iconPath = null;

                    // Check if icon files exist and if current index has an icon
                    if ($request->hasFile('icon') && isset($request->file('icon')[$index])) {
                        $icon = $request->file('icon')[$index];
                        if ($icon->isValid()) {
                            $iconPath = Helper::fileUpload($icon, 'projects/technologies', $icon->getClientOriginalName());
                        }
                    }

                    ProjectTechnology::create([
                        'project_id' => $project->id,
                        'technology_name' => $techName,
                        'icon' => $iconPath,
                    ]);
                }
            }

            // Save project challenges
            if ($request->has('challenge_name')) {
                foreach ($request->challenge_name as $index => $challengeName) {
                    ProjectChallengesAndSolution::create([
                        'project_id' => $project->id,
                        'challenge_name' => $challengeName,
                        'problem_description' => $request->problem_description[$index] ?? null,
                        'solution_description' => $request->solution_description[$index] ?? null,
                    ]);
                }
            }

            return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }


    public function edit($id)
    {

        $project = Project::with(['features', 'technologies', 'challenges'])
            ->findOrFail($id);
        $projectImages = ProjectImage::where('project_id', $id)->get();
        $projectVideos = ProjectVideo::where('project_id', $id)->get();
        return view('backend.layout.Project.edit', compact('project', 'projectImages', 'projectVideos'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'category' => 'required|string|max:255',
            'repository' => 'required|in:private,public',
            'team_size' => 'nullable|integer|min:1',
            'github_link' => 'nullable|url',
            'live_link' => 'nullable|url',
            'description' => 'required|string',
            'image' => 'nullable|array|max:10',
            'video' => 'nullable|array|max:3',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048576',
            'video.*' => 'nullable|mimes:mp4,avi,mov,mkv|max:1048576',
            'feature_name.*' => 'required|string|max:255',
            'feature_description.*' => 'nullable|string',
            'technology_name.*' => 'required|string|max:255',
            'icon.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'challenge_name.*' => 'required|string|max:255',
            'problem_description.*' => 'nullable|string',
            'solution_description.*' => 'nullable|string',
        ]);

        // Find the project by ID
        $project = Project::findOrFail($id);

        // Update project details
        $project->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'category' => $request->category,
            'repository' => $request->repository,
            'team_size' => $request->team_size,
            'github_link' => $request->github_link,
            'live_link' => $request->live_link,
            'description' => $request->description,
        ]);

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

        // Sync features - delete existing and create new ones
        $project->features()->delete();
        if ($request->feature_name) {
            foreach ($request->feature_name as $index => $name) {
                $project->features()->create([
                    'feature_name' => $name,
                    'feature_description' => $request->feature_description[$index] ?? null,
                ]);
            }
        }

        // Handle technology updates
        if ($request->has('technology_name')) {
            // First delete existing technologies if needed
            $project->technologies()->delete();

            foreach ($request->technology_name as $index => $techName) {
                $iconPath = null;

                // Check if new icon was uploaded for this technology
                if ($request->hasFile('icon') && isset($request->file('icon')[$index])) {
                    $icon = $request->file('icon')[$index];
                    if ($icon->isValid()) {
                        $iconPath = Helper::fileUpload($icon, 'projects/technologies', $icon->getClientOriginalName());
                    }
                }
                // Alternatively, keep existing icon if no new one was uploaded
                elseif (isset($request->existing_icon[$index])) {
                    $iconPath = $request->existing_icon[$index];
                }

                ProjectTechnology::create([
                    'project_id' => $project->id,
                    'technology_name' => $techName,
                    'icon' => $iconPath,
                ]);
            }
        }


        // Sync challenges - delete existing and create new ones
        $project->challenges()->delete();
        if ($request->challenge_name) {
            foreach ($request->challenge_name as $index => $name) {
                $project->challenges()->create([
                    'challenge_name' => $name,
                    'problem_description' => $request->problem_description[$index] ?? null,
                    'solution_description' => $request->solution_description[$index] ?? null,
                ]);
            }
        }

        // Redirect back with success message
        return redirect()->route('admin.project.index', $project->id)->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project_chalenges = ProjectChallengesAndSolution::findOrFail($id);
        $project_features = ProjectFeature::findOrFail($id);
        $project_technologies = ProjectTechnology::findOrFail($id);

        if($project_chalenges) {
            $project_chalenges->delete();
        }

        //delete project features
        if($project_features) {
            $project_features->delete();
        }

        //delete project technologies
        if($project_technologies->icon) {
            $oldImagePath = public_path($project_technologies->icon);
            if (file_exists($oldImagePath)) {
                Helper::fileDelete($oldImagePath);
            }
        }
        $project_technologies->delete();

        if (!$project) {
            return response()->json(['t-success' => false, 'message' => 'Data not found.']);
        }
        if ($project->image) {
            $oldImagePath = public_path($project->image);
            if (file_exists($oldImagePath)) {
                Helper::fileDelete($oldImagePath);
            }
        }
        $project->delete();
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

    public function view($id)
    {
        $data = Project::where('id', $id)->first();
        $projectImages = ProjectImage::where('project_id', $id)->get();
        $projectVideos = ProjectVideo::where('project_id', $id)->get();
        $projectFeatures = ProjectFeature::where('project_id', $id)->get();
        $projectTechnologies = ProjectTechnology::where('project_id', $id)->get();
        $projectChallenges = ProjectChallengesAndSolution::where('project_id', $id)->get();
        return view('backend.layout.Project.view', compact('data', 'projectImages', 'projectVideos','projectTechnologies','projectChallenges','projectFeatures'));
    }


}
