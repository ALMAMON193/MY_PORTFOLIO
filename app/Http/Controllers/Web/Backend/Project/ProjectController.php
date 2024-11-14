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

        if ($request->ajax()) {
            $data = Project::query()->orderBy('created_at', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '
                        <a class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View" href="">
                            <span class="btn-inner">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 4.5C7.305 4.5 4 7.805 4 12s3.305 7.5 8 7.5 8-3.305 8-7.5-3.305-7.5-8-7.5zm0 13.5c-2.761 0-5-2.239-5-5s2.239-5 5-5 5 2.239 5 5-2.239 5-5 5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" href="' . route('admin.project.edit', $data->id) . '">
                            <span class="btn-inner">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>

                        <a class="btn btn-danger btn-sm" onclick="showDeleteConfirm(' . $data->id . ')" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" href="#">
                            <span class="btn-inner">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    ';
                })

                ->addColumn('image', function ($data) {
                    $url = asset($data->image);
                    return '<img src="' . $url . '" alt="image" width="40px" height="40px">';
                })
                ->addColumn('status', function ($data) {
                    $status = '<div class="dropdown">';
                    $status .= '<button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownStatus' . $data->id . '" data-bs-toggle="dropdown" aria-expanded="false">';
                    $status .= $data->status;
                    $status .= '</button>';
                    $status .= '<ul class="dropdown-menu" aria-labelledby="dropdownStatus' . $data->id . '">';
                    $status .= '<li><a class="dropdown-item " href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'Active\')">Active</a></li>';
                    $status .= '<li><a class="dropdown-item" href="javascript:void(0);" style="width:135px;" onclick="showStatusChangeAlert(event, ' . $data->id . ', \'Inactive\')">Inactive</a></li>';
                    $status .= '</ul>';
                    $status .= '</div>';

                    return $status;
                })
                ->addColumn('created_at', function ($data) {
                    return $data->created_at->format('Y-m-d H:i:s');
                })
                ->rawColumns(['action', 'status','image'])
                ->make(true);
        }

        return view('backend.layout.Project.index');
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

        ]);

        // File upload handling
        $imagePath = null;
        $videoPath = null;

        if ($request->hasFile('image')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('image'), 'project/image', $randomString);
        }
        $project = new Project();
        $project->name = $request->name;
        $project->image = $imagePath;
        $project->description = $request->description;
        $project->github_link = $request->github_link;
        $project->live_link = $request->live_link;
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
