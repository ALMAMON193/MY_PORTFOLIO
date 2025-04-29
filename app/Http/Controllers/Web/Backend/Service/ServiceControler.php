<?php

namespace App\Http\Controllers\web\Backend\Service;

use Exception;
use App\Helpers\Helper;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ServiceControler extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = Service::latest()->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn(name: 'image', content: function ($data) {
                        $image = $data->image;
                        $url = asset($image);
                        return '<img src="' . $url . '" alt="image" width="100px" height="100px" style="margin-left:20px;">';
                    })
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

                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.service.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.service.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"> Delete</i></a>';
                    })
                    ->rawColumns(columns: ['image', 'status', 'action'])
                    ->make(true);
            }
            return view('backend.layout.service.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function create()
    {
        return view('backend.layout.service.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg,webp',
            'description' => 'nullable|string',
        ]);

        $imagePath = null;

        // Handle file upload
        if ($request->hasFile('image')) {
            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file(key: 'image'), 'services', $randomString);
        }

        // Store data
        Service::create([
            'name' => $validated['name'],
            'image' => $imagePath,
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.service.index')->with('success', 'Skill added successfully');
    }

    public function edit($id)
    {
        $skill = Service::findOrFail($id);
        return view('backend.layout.service.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,jpg,png,svg,webp',
            'description' => 'nullable|string',
        ]);

        $service = Service::findOrFail($id);
        $imagePath = $service->image;

        // Handle file upload
        if ($request->hasFile(key: 'image')) {
            // Delete old file
            if ($imagePath) {
                Helper::fileDelete(path: $imagePath);
            }

            $randomString = Str::random(10);
            $imagePath = Helper::fileUpload($request->file('image'), 'services', $randomString);
        }

        // Update record
        $service->update([
            'name' => $validated['name'],
            'image' => $imagePath,
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.service.index')->with('success', 'Skill updated successfully');
    }

    public function status($id)
    {
        $data = Service::where('id', $id)->first();
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

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete associated file
        if ($service->image) {
            Helper::fileDelete($service->image);
        }
        $service->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully.']);
    }
    public function view($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.layout.service.view', compact(var_name: 'service'));
    }
}
