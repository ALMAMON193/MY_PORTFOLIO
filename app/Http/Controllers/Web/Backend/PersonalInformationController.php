<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInformationController extends Controller
{
    public function create()
    {
        // Fetch the first record (if it exists)
        $data = PersonalInformation::first();

        // Pass the data to the view
        return view('backend.layout.personal_information.create', compact('data'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'nullable|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'gender' => 'nullable|string|in:male,female,other',
            'date_of_birth' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'nationality' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'emergency_contact_phone' => 'nullable|string|max:20',
        ]);

        // Check if the ID exists in the request
        $personalInfo = PersonalInformation::updateOrCreate(
            ['id' => $request->id],
            $validated
        );

        // Fetch the latest data
        $data = $personalInfo;

        // Correct the ternary operator for message assignment
        $message = $request->id ? 'Data stored successfully!' : 'Data updated successfully!';

        // Redirect to the create route with the success message and updated data
        return redirect()->route('admin.personal.info.create')->with(['success' => $message, 'data' => $data]);
    }
}
