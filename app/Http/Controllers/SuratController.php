<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\JenisSurat;
use App\Models\DetailSurat;
use App\Models\UserProfile;
use Illuminate\Support\Str;
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
        $request->validate([
            'jenis_surat' => 'required|exists:jenis_surats,id',
            //tambahkan validasi untuk user
        ]);
        $inputFormSurat = InputFormSurat::where('jenis_surat_id', $request->input('jenis_surat'))->get();
        $nomorSurat = '001';
        $surat = Surat::create([
            'jenis_surat' => $request->input('jenis_surat'),
            'nomor_surat' => $nomorSurat,
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

    public function HistorySuratUser(){
        //view untuk nampilin surat2 user
        if(Auth::check()) {
            // User is logged in, proceed to fetch data
            $user = Auth::user();
            $surat = Surat::where('user_id', $user->id)->with('jenisSurat')->get();
            

            return view('panel.home.surat.index', ['surat' => $surat]);
        } else {
            // User belum login, bisa redirect atau tampilkan pesan error
            return redirect()->route('/');
        }
    }
}
