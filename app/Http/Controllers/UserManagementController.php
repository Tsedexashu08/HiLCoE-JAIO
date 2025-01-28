<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserManagementController extends Controller
{

    public function FetchsUserAndRoles(Request $request)
    {
        $adminCount = User::role('Admin')->count();
        $facultyCount = User::role('Faculty')->count();
        $studentCount = User::role('Student')->count();

        $users = User::where('id', '!=', Auth::id())->orderBy('created_at','desc') // Exclude the current user
        ->get(); // retrievieng all our users except the current one(since logged in user can already view there profile from accountpage...duh)
        $roles = Role::all();
        $permissions = Permission::all();

        $data = [
            'adminCount' => $adminCount,
            'facultyCount' => $facultyCount,
            'studentCount' => $studentCount,
            'users' => $users,
            'roles' => $roles,
            'permissions' => $permissions,
        ];


        return view('user-managment-page', $data);
    }
    public function EditUser($id) {
        $user = User::find($id);
        return view('edit-user', ['user'=>$user]);
    }
    public function DeleteUser($id) {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
    public function ViewUser($id) {
        $user = User::find($id);
        return view('user-view-page', ['user' => $user]);
    }
}
