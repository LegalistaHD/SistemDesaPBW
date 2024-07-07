<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\InputFormSurat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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

    //untuk user yang akan buat surat
    public function buatsurat(){
        $jenisSurat = JenisSurat::all();
        $data = array('jenisSurat' => $jenisSurat);
        // return $data;

        return view('home.surat.create', $data);
    }

    
    // public function inputansurat(){
    //     return 1;
    //     $jenissurat = $request->input('jenissurat');
    //     return $jennissurat;
    //     $inputFormSurat = InputFormSurat::where('jenis_surat_id', $jenissurat)->get();
    //     $profil = UserProfile::where('user_id', auth()->user()->id)->first();

    //     // Ambil nama jenis surat
    //     $jenisSurat = JenisSurat::find($jenissurat);

    //     $data = [
    //         'inputFormSurat' => $inputFormSurat,
    //         'jenisSurat' => $jenisSurat
    //     ];
    //     return view('Homepage.inputSurat.index', compact('inputFormSurat', 'jenisSurat', 'profil'));
    //     // return view('Homepage.inputSurat.index', $data);
    // }
    public function inputanSurat(Request $request)
    {
        $jenissurat = $request->input('jenissurat');
        $inputFormSurat = InputFormSurat::where('jenis_surat_id', $jenissurat)->get();
        $profil = UserProfile::where('user_id', auth()->user()->id)->first();

        // Ambil nama jenis surat
        $jenisSurat = JenisSurat::find($jenissurat);

        $data = [
            'inputFormSurat' => $inputFormSurat,
            'jenisSurat' => $jenisSurat,
            'profil' => $profil
        ];

        return view('Homepage.inputSurat.index', $data);
    }
}
