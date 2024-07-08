<?php

namespace App\Http\Controllers;


use App\Models\Surat;
use Barryvdh\DomPDF\Facade\Pdf;
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
        if(Auth::check()) {
            // User is logged in, proceed to fetch data
            $user = Auth::user();
            $surat = Surat::where('user_id', $user->id)->with('jenisSurat')->get();
            
            return view('panel.surat.index', ['surat' => $surat]);
        } else {
            // User belum login, bisa redirect atau tampilkan pesan error
            return redirect()->route('/');
        }      
    }

    //untuk user yang akan buat surat / memilih jenis surat yang akan dibuat
    public function buatsurat(){
        $jenisSurat = JenisSurat::all();
        $data = array('jenisSurat' => $jenisSurat);
        // return $data;

        return view('panel.home.surat.create', $data);
    }

   //untuk mengisi form surat
    public function inputansurat(Request $request)
    {
        $user = Auth::user();
        $isiProfil = $user->profil;
        // Mengecek apakah user sudah mengisi Profile 
        if (!$isiProfil){
            return redirect('/profile');
        }

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

        return redirect('panel/surat')->with('success', 'Surat berhasil dibuat!');

    }


    public function detail($id){
        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $jenisSurat = $surat->jenisSurat->nama_jenis;
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        switch ($jenisSurat) {
            case 'Surat Biodata Penduduk':
                return view('templatesurat.surat_biodata', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Wali':
                return view('templatesurat.surat_wali', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Keramaian':
                return view('templatesurat.surat_keramaian', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Domisili':
                return view('templatesurat.surat_domisili', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Dispensasi':
                return view('templatesurat.surat_dispensasi', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Kelahiran':
                return view('templatesurat.surat_kelahiran', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Permohonan Akta':
                return view('templatesurat.surat_permohonan_akta', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Permohonan Penduduk':
                return view('templatesurat.surat_permohonan_penduduk', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Permohonan Cerai':
                return view('templatesurat.surat_permohonan_cerai', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Undangan':
                return view('templatesurat.surat_undangan', compact('surat', 'detailSurat', 'jenisSurat'));     
            default:
                return view('surat.default', compact('surat'));}

    }


    // public function generatePDF($id){
    //     $surat = Surat::with('jenisSurat')->findOrFail($id);
    //     $jenisSurat = $surat->jenisSurat->nama_jenis;
    //     $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
    //     switch ($jenisSurat) {
    //         case 'Surat Biodata Penduduk':
    //             $pdf = pdf::loadView('templatesurat.surat_biodata_print', compact('surat', 'detailSurat', 'jenisSurat'));
    //             return $pdf->stream('Surat biodata.pdf');
    //         case 'Surat Wali':
    //             $pdf = pdf::loadView('templatesurat.surat_wali_print', compact('surat', 'detailSurat', 'jenisSurat'));
    //             return $pdf->stream('Surat wali.pdf');
    //         case 'Surat Wali':
    //             $pdf = pdf::loadView('templatesurat.surat_wali_print', compact('surat', 'detailSurat', 'jenisSurat'));
    //             return $pdf->stream('Surat wali.pdf');
    //         default:
    //             return view('surat.default', compact('surat'));}


    //     $pdf = pdf::loadView('user.print');
    //     return $pdf->stream('test.pdf');
    // }
    public function generatePDF($id) {
        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $jenisSurat = $surat->jenisSurat->nama_jenis;
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        
        // Ambil ID pengguna
        $userId = $surat->user_id; // Asumsikan bahwa `user_id` adalah kolom yang menyimpan ID pengguna
        // Hash ID pengguna
        $hashedUserId = hash('sha256', $userId);
    
        switch ($jenisSurat) {
            case 'Surat Biodata Penduduk':
                $pdf = pdf::loadView('templatesurat.surat_biodata_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_biodata_{$hashedUserId}.pdf");
            case 'Surat Wali':
                $pdf = pdf::loadView('templatesurat.surat_wali_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_wali_{$hashedUserId}.pdf");
            case 'Surat Keramaian':
                $pdf = pdf::loadView('templatesurat.surat_keramaian_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_keramaian_{$hashedUserId}.pdf");
            case 'Surat Domisili':
                $pdf = pdf::loadView('templatesurat.surat_domisili_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_domisili_{$hashedUserId}.pdf");
            case 'Surat Dispensasi':
                $pdf = pdf::loadView('templatesurat.surat_dispensasi_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_dispensasi_{$hashedUserId}.pdf");
            case 'Surat Kelahiran':
                $pdf = pdf::loadView('templatesurat.surat_kelahiran_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_kelahiran_{$hashedUserId}.pdf");
            case 'Surat Permohonan Akta':
                $pdf = pdf::loadView('templatesurat.surat_permohonan_akta_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_permohonan_akta_{$hashedUserId}.pdf");
            case 'Surat Permohonan Penduduk':
                $pdf = pdf::loadView('templatesurat.surat_permohonan_penduduk_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_permohonan_penduduk_{$hashedUserId}.pdf");
            case 'Surat Permohonan Cerai':
                $pdf = pdf::loadView('templatesurat.surat_permohonan_cerai_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_permohonan_cerai_{$hashedUserId}.pdf");
            case 'Surat Undangan':
                $pdf = pdf::loadView('templatesurat.surat_undangan_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream("Surat_undangan_{$hashedUserId}.pdf");
            default:
                return view('surat.default', compact('surat'));
        }
    }

    // public function HistorySuratUser(){
    //     //view untuk nampilin surat2 user
    //     if(Auth::check()) {
    //         // User is logged in, proceed to fetch data
    //         $user = Auth::user();
    //         $surat = Surat::where('user_id', $user->id)->with('jenisSurat')->get();
            

    //         return view('panel.home.surat.index', ['surat' => $surat]);
    //     } else {
    //         // User belum login, bisa redirect atau tampilkan pesan error
    //         return redirect()->route('/');
    //     }
    // }
}
