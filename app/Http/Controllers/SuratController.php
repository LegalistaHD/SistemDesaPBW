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

        return view('panel.home.surat.create', $data);
    }

   
    public function inputansurat(Request $request)
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

        return view('panel.home.surat.input', $data);
    }

    public function submitSurat(Request $request){
        // return $request;
        $request->validate([
            'jenisSurat_id' => 'required|exists:jenissurats,id',
            //tambahkan validasi untuk user
        ]);

        $inputFormSurat = InputFormSurat::where('jenisSurat_id', $request->input('jenisSurat_id'))->get();
        $nomorSurat = '001';
        $surat = Surat::create([
            'jenisSurat_id' => $request->input('jenisSurat_id'),
            'nomorSurat' => $nomorSurat,
            'user_id' => $request->input('user_id'), // Mengambil nilai dari inputan tersembunyi
            'validate' => false,
        ]);

        // Simpan detail surat
        foreach ($inputFormSurat as $input) {
            DetailSurat::create([
                'surat_id' => $surat->id,
                'field' => $input->field,
                'value' => $request->input($input->field),
            ]);
        }

        return redirect('/')->with('success', 'Surat berhasil dibuat!');

    }
}
