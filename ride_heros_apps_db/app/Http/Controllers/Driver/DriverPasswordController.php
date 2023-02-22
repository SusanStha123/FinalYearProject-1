<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DriverPasswordController extends Controller
{
    public function updateDriverPassword(Request $request)
    {
        return response([
            'status' => 'success',
        ]);
    }

    // if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
    //     // The passwords matches
    //     return response([
    //         'status' => 401,
    //         'message' => 'Passwords do not match'
    //     ]);
    // }

    // if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
    //     //Current password and new password are same
    //     return response([
    //         'status' => 401,
    //         'message' => 'Current password and new password are same'
    //     ]);
    // }


    // if (strcmp($request->get('new_password'), $request->get('retype_password')) == 0) {
    //     //Current password and new password are same
    //     //Change Password
    //     $user = Auth::user()->id;
    //     $user->password = bcrypt($request->get('new_password'));
    //     $user->update();
    //     return response([
    //         'status' => 200,
    //         'message' => 'Password changed successfully',
    //     ]);
    //     }
    // }
}
