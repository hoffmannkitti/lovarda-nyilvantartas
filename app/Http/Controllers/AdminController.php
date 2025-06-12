<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function assignRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,rider,employee,guest',
        ]);

        $user->role = $request->role;
        $user->save();

        return response()->json(['message' => 'Felhasználó szerepe frissítve', 'user' => $user]);
    }
}
