<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    public function showResetForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.reset_password', compact('user'));
    }

    public function reset(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.list_admin')->with('success', 'Password updated successfully');
    }
}
