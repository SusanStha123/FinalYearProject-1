<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DriverProfileController extends Controller
{
    // updating the profile of the driver
    public function updateDriverProfile(Request $request, $id)
    {
        $driver = User::where('id', $id)->first();
        if ($request->hasFile('profile')) {
            $profile = $request->file('profile');
            $new_profile_image = time() . $profile->getClientOriginalName();
            $profile->move('driver/profile-img/', $new_profile_image);
            $driver->profile = '/driver/profile-img/' . $new_profile_image;
        };
        $driver->name = $request->name;
        $driver->bio = $request->bio;
        $driver->update();

        return response([
            'status' => 200,
            'message' => 'Driver profile updated successfully',
        ]);
    }
}
