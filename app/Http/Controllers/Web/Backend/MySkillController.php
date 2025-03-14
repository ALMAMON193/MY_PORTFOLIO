<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Helpers\Helper;
use App\Models\MySkill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class MySkillController extends Controller
{
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $data = MySkill::latest()->get();
                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('icon', function ($data) {
                        $image = $data->icon;
                        $url = asset($image);
                        return '<img src="' . $url . '" alt="image" width="100px" height="100px" style="margin-left:20px;">';
                    })
                    ->addColumn('action', function ($data) {
                        return '<a href="' . route('admin.my.skill.view', $data->id) . '" class="btn btn-primary btn-sm"><i class="ri-eye-line"></i> View</a>
                        <a href="' . route('admin.my.skill.edit', $data->id) . '" class="btn btn-warning btn-sm"><i class="ri-edit-2-line"></i> Edit</a>
                        <a href="#" onclick="deleteAlert(' . $data->id . ')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line" id="custom-sa-warning"> Delete</i></a>';
                    })
                    ->rawColumns(['icon', 'action'])
                    ->make(true);
            }
            return view('backend.layout.my_skill.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function create()
    {
        return view('backend.layout.my_skill.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill_type' => 'required|in:front-end,backend,server-side,database,devops,full-stack,cms,version-control,testing,security,mobile-development,ui-ux-design',
            'icon' => 'nullable|file|mimes:jpeg,jpg,png,svg,webp',
            'description' => 'nullable|string',
            'percentage' => 'nullable|integer',
        ]);

        $iconPath = null;

        // Handle file upload
        if ($request->hasFile('icon')) {
            $randomString = Str::random(10);
            $iconPath = Helper::fileUpload($request->file('icon'), 'skills', $randomString);
        }

        // Store data
        MySkill::create(array_merge($validated, ['icon' => $iconPath]));

        return redirect()->route('admin.my.skill.index')->with('success', 'Skill added successfully');
    }

    public function edit($id)
    {
        $skill = MySkill::findOrFail($id);
        return view('backend.layout.my_skill.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill_type' => 'required|in:front-end,backend,server-side,database,devops,full-stack,cms,version-control,testing,security,mobile-development,ui-ux-design',
            'icon' => 'nullable|file|mimes:jpeg,jpg,png,svg,webp',
            'description' => 'nullable|string',
            'percentage' => 'nullable|integer',
        ]);

        $skill = MySkill::findOrFail($id);
        $iconPath = $skill->icon;

        // Handle file upload
        if ($request->hasFile('icon')) {
            // Delete old file
            if ($iconPath) {
                Helper::fileDelete($iconPath);
            }

            $randomString = Str::random(10);
            $iconPath = Helper::fileUpload($request->file('icon'), 'skills', $randomString);
        }

        // Update record
        $skill->update(array_merge($validated, ['icon' => $iconPath]));

        return redirect()->route('admin.my.skill.index')->with('success', 'Skill updated successfully');
    }

    public function destroy($id)
    {
        $skill = MySkill::findOrFail($id);

        // Delete associated file
        if ($skill->icon) {
            Helper::fileDelete($skill->icon);
        }

        $skill->delete();

        return redirect()->route('admin.my.skill.index')->with('success', 'Skill deleted successfully');
    }
    public function view($id)
    {
        $skill = MySkill::findOrFail($id);
        return view('backend.layout.my_skill.view', compact(var_name: 'skill'));
    }
}
