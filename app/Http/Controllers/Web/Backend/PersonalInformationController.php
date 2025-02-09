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
        $personalInformation = PersonalInformation::first();

        if ($personalInformation) {
            $personalInformation->update($request->only([
                'fname',
                'lname',
                'email',
                'gender',
                'date_of_birth',
                'phone',
                'nationality',
                'address',
                'city',
                'postal_code',
                'country',
                'occupation',
                'company_name',
                'bio',
                'emergency_contact_phone'
            ]));
        } else {
            PersonalInformation::create($request->only([
                'fname',
                'lname',
                'email',
                'gender',
                'date_of_birth',
                'phone',
                'nationality',
                'address',
                'city',
                'postal_code',
                'country',
                'occupation',
                'company_name',
                'bio',
                'emergency_contact_phone'
            ]));
        }

        return redirect()->route('admin.personal.info.create')->with('success', 'Data saved successfully');
    }
}
