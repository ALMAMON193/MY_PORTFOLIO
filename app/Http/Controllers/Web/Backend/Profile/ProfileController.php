<?php

namespace App\Http\Controllers\Web\Backend\Profile;

use Exception;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.layout.profile.edit');
    }
    public function UpdateProfile(Request $request)
    {
        // Validate the request data for updating the profile
        $validator = Validator::make($request->all(), [
            'name'      => 'nullable|string|max:255',
            'email'     => 'nullable|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Find the currently authenticated user
        $user = User::find(auth()->user()->id);
        // Update the user's profile details
        $user->name = $request->name;
        $user->email = $request->email;
        // Save the updated user details
        $user->save();
        // Redirect back with a success message
        return redirect()->back()->with('t-success', 'Profile updated successfully');
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif',
        ]);
        // Get the authenticated user
        $user = Auth::user();
        // Check if an avatar file was uploaded
        if ($request->hasFile('avatar')) {
            // Generate a random string for the filename
            $randomString = (string) Str::uuid();
            // Upload the new image and get the path
            $newImagePath = Helper::fileUpload($request->file('avatar'), 'user/avatar', $randomString);
            // Delete the old avatar if it exists
            if ($user->avatar) {
                $oldImagePath = public_path($user->avatar);
                if (file_exists($oldImagePath)) {
                    Helper::fileDelete($oldImagePath);
                }
            }
            // Update the user's avatar path
            $user->avatar = $newImagePath;
            $user->save();
            return response()->json(['success' => true, 'message' => 'Avatar uploaded successfully']);
        }
        return response()->json(['success' => false, 'message' => 'No file uploaded'], 400);
    }

    public function UpdatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = Auth::user();

            if (Hash::check($request->old_password, $user->password)) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect()->back()->with('t-success', 'Password updated successfully');
            } else {
                return redirect()->back()->with('t-error', 'Current password is incorrect');
            }
        } catch (Exception $e) {
            Log::error('Password update failed: ' . $e->getMessage());
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }
}
