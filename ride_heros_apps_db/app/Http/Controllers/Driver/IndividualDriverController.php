<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndividualDriverController extends Controller
{
    // getting the individual driver details from auth
    public function individualDriverDetails()
    {
        $individualDriver = auth()->user();
        return response([
            'status' => 200,
            'individualDriver' => $individualDriver,
        ]);
    }
}
