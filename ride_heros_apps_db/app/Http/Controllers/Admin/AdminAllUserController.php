<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAllUserController extends Controller
{
    // getting all users from the database
    public function getAllUsers()
    {
        $allUsers = User::all();
        return response([
            'status' => 200,
            'allUsers' => $allUsers,
            'message' => "Getting all users from the database",
        ]);
    }
}
