<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualUserController extends Controller
{
    // getting the individual users details from auth
    public function individualUserDetails()
    {
        $individualUser = auth()->user();
        return response([
            'status' => 200,
            'individualUser' => $individualUser,
        ]);
    }
}
