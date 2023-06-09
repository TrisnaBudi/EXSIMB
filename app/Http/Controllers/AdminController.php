<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gejala;
use App\Models\Keputusan;
use App\Models\Kode_Gejala;
use App\Models\KondisiUser;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function dashboard()
{
    $data = [
        'gejala' => Gejala::all(),
        'kondisi_user' => KondisiUser::all(),
        'user' => User::all(),
        'kerusakan' => Kerusakan::all()
    ];
    return view('admin.dashboard', $data);
}

    
    public function index()
    {
        $users = User::all();
        return view('admin.list_admin', compact('users'));
    }


    public function create()
    {
        return view('admin.add_admin');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('admin.list_admin')->with('success', 'Admin created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.reset_password', compact('user'));
    }
    
    

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        // Find the user
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        
        // Update the password if provided
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.list_admin')->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.list_admin')->with('success', 'Admin deleted successfully');
    }
}
