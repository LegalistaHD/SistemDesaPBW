<?php

namespace App\Http\Controllers;

use App\Models\RoleHasPermissionModel;
use App\Models\RoleModel;
use App\Models\User;
use App\Models\UserHasRoleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function settings()
    {
        $user = Auth::user()->role_id;
        $PermissionRoles = RoleHasPermissionModel::getPermission('Settings', $user);
        if(empty($PermissionRoles))
        {
            abort(401);
        // }else if( $user == 8)
        // {
        //     return view('panel.home.profile.create');
        }else{
            $roles = RoleModel::all();
            // Ambil role yang dimiliki oleh pengguna
            $currentUserRoles = UserHasRoleModel::where('user_id', auth()->user()->id)->pluck('role_id')->toArray();

            $data['roles'] = RoleModel::whereIn('id', $currentUserRoles)->get(); // Ambil role berdasarkan role_id yang dimiliki user
            $data['currentUser'] = auth()->user(); // Ambil pengguna yang sedang login

            return view('panel.settings.index', $data);
        }
        
    }
    
    public function updateCurrentRole(Request $request)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);
        $user = User::getSingle(auth()->user()->id);
        $user->role_id = $request->role_id;
        $user->save();
        
        return redirect()->back()->with('success', 'Current role updated successfully');
    }
}
