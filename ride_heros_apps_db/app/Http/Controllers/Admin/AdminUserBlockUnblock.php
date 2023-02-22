<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserBlockUnblock extends Controller
{
    public function block(Request $request, $id)
    {
        $user = User::find($id);

        $user->blocked = $request->blocked;
        $user->update();
        return response([
            'status' => 200,
            'message' => 'User has been blocked',
        ]);
    }

    public function unblock(Request $request, $id)
    {
        $user = User::find($id);
        $user->blocked = $request->blocked;
        $user->update();
        return response([
            'status' => 200,
            'message' => 'User has been unblocked',
        ]);
    }
}
