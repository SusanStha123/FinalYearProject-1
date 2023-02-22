<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCountController extends Controller
{
    // counting the users in the database
    public function getUserCount()
    {
        $allUsers = User::where('roles', 1)->get()->count();
        return response([
            'status' => 200,
            'allUsers' => $allUsers,
            'messages' => 'User Count Successfully',
        ]);
    }

    // counting the drivers in the database
    public function getDriverCount()
    {
        $allDrivers = User::where('roles', 2)->get()->count();
        return response([
            'status' => 200,
            'allDrivers' => $allDrivers,
            'messages' => 'Driver Count Successfully',
        ]);
    }

    // counting the verified drivers in the database
    public function getVerifiedDriverCount()
    {
        $verifiedDrivers = DB::table('users')->where([
            ['roles', '=', 2],
            ['status', '=', 1],
        ])->get()->count();
        return response([
            'status' => 200,
            'verifiedDrivers' => $verifiedDrivers,
            'messages' => 'Driver Count Successfully',
        ]);
    }
}
