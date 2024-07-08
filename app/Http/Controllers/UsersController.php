<?php

namespace App\Http\Controllers;

use App\Models\RoleHasPermissionModel;
use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\User;
use App\Models\UserHasRoleModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function users()
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $data['PermissionAdd'] = RoleHasPermissionModel::getPermission('Add Users', Auth::user()->role_id); 
        $data['PermissionEdit'] = RoleHasPermissionModel::getPermission('Edit Users', Auth::user()->role_id); 
        $data['PermissionDelete'] = RoleHasPermissionModel::getPermission('Delete Users', Auth::user()->role_id); 
        
        $data['getRecord'] = User::getRecord();
        return view('panel.users.list', $data);
    }

    public function add()
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Add Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }
        
        $getRole = RoleModel::getRecord();
        $data['getRole'] = $getRole;
        return view('panel.users.add', $data);
    }

    public function insert(Request $request)
    {
        // dd($request);
        $PermissionRoles = RoleHasPermissionModel::getPermission('Add Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        request()->validate([
            'email' => 'required|email|unique:users',
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->phone = trim($request->phone);
        $user->password = Hash::make($request->password);
        if (!empty($request->role_id)) {
            $user->role_id = trim($request->role_id[0]);
        } else {
            return redirect('panel/users')->with('error', "At least one role must be selected");
        }
        $user->save();

        UserHasRoleModel::InsertUpdateRecord($request->role_id, $user->id);

        return redirect('panel/users')->with('success', "User Successfully Created");

    }

    public function edit($id)
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Edit Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }
        
        $data['getRecord'] = User::getSingle($id);
        $data['getRole'] = RoleModel::getRecord();
        $data['getUserRole'] = UserHasRoleModel::getUserRole($id);
        return view('panel.users.edit', $data);
    }

    public function update($id, Request $request)
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Edit Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $user = User::getSingle($id);
        $user->name = trim($request->name);
        if(!empty($request->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        UserHasRoleModel::InsertUpdateRecord($request->role_id, $user->id);

        return redirect('panel/users')->with('success', "User Successfully Updated");
    }

    public function delete($id)
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Delete Users', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }
        
        $save = User::getSingle($id);
        $save->delete();

        return redirect('panel/users')->with('success', "User Succesfully Deleted");
    }


    

}
