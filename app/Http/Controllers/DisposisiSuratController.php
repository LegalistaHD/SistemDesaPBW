<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use Illuminate\Http\Request;
use App\Models\DisposisiSurat;
use App\Models\SuratEksternal;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleHasPermissionModel;

class DisposisiSuratController extends Controller
{
    public function showAll() {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Disposisi', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $data['PermissionAdd'] = RoleHasPermissionModel::getPermission('Add Disposisi', Auth::user()->role_id); 
        $data['PermissionEdit'] = RoleHasPermissionModel::getPermission('Edit Disposisi', Auth::user()->role_id); 
        $data['PermissionDelete'] = RoleHasPermissionModel::getPermission('Delete Disposisi', Auth::user()->role_id);

        if(Auth::user()->role_id == 3 || Auth::user()->role_id == 1) {
            $data['disposisiSurat'] = DisposisiSurat::with('suratEksternal')->orderBy('created_at', 'desc')->get(); // Retrieve semua jika kepala desa / admin
        }
        else {
            $data['disposisiSurat'] = DisposisiSurat::whereHas('roleDestination', function ($query) {
                $query->where('role_id', Auth::user()->role_id);
              })
              ->orderBy('created_at', 'desc')
              ->get();
        }

        return view('panel.disposisiSurat.list', $data);
    }

    public function showAddForm() {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Add Disposisi', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $suratTerdisposisi = DisposisiSurat::pluck('surat_id');
        $suratEksternal = SuratEksternal::whereNotIn('id', $suratTerdisposisi)->get();
        $roles = RoleModel::getRecord();

        return view('panel.disposisiSurat.add', ['suratEksternal' => $suratEksternal, 'roles' => $roles]);
    }

    public function store(Request $request) {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Add Disposisi', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $disposisiSurat = new DisposisiSurat();
        $disposisiSurat->catatan = $request->catatan;
        $disposisiSurat->surat_id = $request->surat_id;
        $disposisiSurat->status = "Belum Dibaca";
        
        $disposisiSurat->save();
        
        $disposisiSurat->roleDestination()->attach($request->roles_ids);
        // dd($disposisiSurat->id);
        
        return redirect('panel/disposisiSurat')->with('success', "Disposisi surat berhasil dibuat");
    }
}
