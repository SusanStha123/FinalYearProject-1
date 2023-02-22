<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    // updating the profile of the driver
    public function updateUserProfile(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $new_profile_image = time() . $profile->getClientOriginalName();
            $profile->move('user/profile-img/', $new_profile_image);
            $user->profile = '/user/profile-img/' . $new_profile_image;
        };
        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->update();

        return response([
            'status' => 200,
            'message' => 'User profile updated successfully',
        ]);
    }
}
