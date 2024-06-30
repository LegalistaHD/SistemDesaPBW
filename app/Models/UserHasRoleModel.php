<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasRoleModel extends Model
{
    use HasFactory;

    protected $table = 'user_has_role';

    static public function InsertUpdateRecord($role_ids, $user_id)
    {
        UserHasRoleModel::where('user_id', '=', $user_id)->delete();
        foreach($role_ids as $role_id)
        {
            $save = new UserHasRoleModel;
            $save->role_id = $role_id;
            $save->user_id = $user_id;
            $save->save();
        }
    }

    //Metode ini mengambil semua peran yang dimiliki oleh seorang pengguna berdasarkan user_id yang diberikan.
    static public function getUserRole($user_id)
    {
        return UserHasRoleModel::where('user_id', '=', $user_id)->get();
    } 

    // static public function getRole($slug, $user_id)
    // {
    //     return UserHasRoleModel::select('user_has_role.id')
    //     ->join('roles', 'roles.id', '=', 'user_has_role.role_id')
    //     ->where('user_has_role.user_id', '=', $user_id)
    //     ->where('roles.name', '=', $slug)
    //     ->count();
    // }
}
