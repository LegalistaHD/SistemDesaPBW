<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\InputFormSurat;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleHasPermissionModel;

class SuratController extends Controller
{
    public function surat()
    {
        $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }
        return view('panel.surat.index');
    }

    public function buatsurat(Request $request, Surat $surat){
        $jenisSurat = JenisSurat::all();
        $data = array('jenisSurat' => $jenisSurat);
        return view('Homepage.BuatSurat.index', $data);//sesuain
    }

    
    public function inputanSurat(Request $request){
        $jenissurat = $request->input('jenissurat');
        $inputFormSurat = InputFormSurat::where('jenisSurat_id', $jenissurat)->get();
        $profil = UserProfile::where('user_id', auth()->user()->id)->first();

        // Ambil nama jenis surat
        $jenisSurat = JenisSurat::find($jenissurat);

        $data = [
            'inputFormSurat' => $inputFormSurat,
            'jenisSurat' => $jenisSurat
        ];
        return view('Homepage.inputSurat.index', compact('inputFormSurat', 'jenisSurat', 'profil'));
        // return view('Homepage.inputSurat.index', $data);
    }
}
