<?php

namespace App\Http\Controllers\Web\Backend;

use App\Helpers\Helper;
use App\Models\MySkill;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MySkillController extends Controller
{
    public function index()
    {
        $skills = MySkill::paginate(10);
        return view('backend.layout.my_skill.index', compact('skills'));
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
}
