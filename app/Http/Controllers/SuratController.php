<?php

namespace App\Http\Controllers;


use App\Models\Surat;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\JenisSurat;
use App\Models\DetailSurat;
use Illuminate\Support\Facades\DB;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InputFormSurat;
use Illuminate\Support\Facades\Auth;
use App\Models\RoleHasPermissionModel;
use Carbon\Carbon;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use ConsoleTVs\Charts\Facades\Charts;


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

        return redirect()->route('panel.dashboard')->with('success', 'Surat berhasil dibuat!');

    }


    public function detail($id){

        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $suratpdf = Pdf::loadView('panel.surat.default', ['surat'=>$surat]);
        $jenisSurat = $surat ->jenisSurat->nama_jenis;

        if ($surat->tanda_tangan) {
            
            $tandaTanganPath = public_path('tanda_tangan/' . $surat->tanda_tangan . '.png');
            // dd($tandaTanganPath);
            if (file_exists($tandaTanganPath)) {
                $surat->tanda_tangan = asset('tanda_tangan/' . $surat->tanda_tangan . '.png');
            } else {
                $surat->tanda_tangan = null;
            }

        } else{
            return redirect()->back()->with('status','Tunggu Hingga Status Tervalidasi Oleh Kepala Desa');
        }
        // dd($surat);
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        switch ($jenisSurat) {
            case 'Biodata Penduduk':
                return view('templatesurat.surat_biodata', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Izin':
                return view('surat.izin', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Izin':
                return view('surat.izin', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Izin':
                return view('surat.izin', compact('surat', 'detailSurat', 'jenisSurat'));
            case 'Surat Izin':
                return view('surat.izin', compact('surat', 'detailSurat', 'jenisSurat'));
                  
            default:
                // return view('panel.surat.default', ['surat'=>$surat]);}
                return $suratpdf->stream();

        }
    }


    public function generatePDF($id){
        $surat = Surat::with('jenisSurat')->findOrFail($id);
        $jenisSurat = $surat->jenisSurat->nama_jenis;
        $detailSurat = DetailSurat::where('surat_id', $surat->id)->get();
        switch ($jenisSurat) {
            case 'Biodata Penduduk':
                $pdf = pdf::loadView('templatesurat.surat_biodata_print', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream('test.pdf');
            case 'Surat Izin':
                $pdf = pdf::loadView('user.surat_biodata', compact('surat', 'detailSurat', 'jenisSurat'));
                return $pdf->stream('test.pdf');
                return view('surat.izin', compact('surat'));
            // Tambahkan kasus lainnya sesuai dengan jenis surat yang ada
            default:
                return view('surat.default', compact('surat'));}


        $pdf = pdf::loadView('user.print');
        return $pdf->stream('test.pdf');
    }


    public function showAll(){
        $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $surats = Surat::with('user')->where('status','=',0)
        ->join('users', 'surats.user_id', '=', 'users.id')
        ->select('surats.*')
        ->get();
    
        return view('panel.validasiSurat.validasiOperator', compact('surats'));
        
        }

    public function validateByOperator($id)
        {
            // Validasi surat oleh operator
            $letter = Surat::findOrFail($id);
            // Lakukan validasi, misalnya dengan mengubah status
            $letter->status =1;
            $letter->save();
    
            return redirect()->route('panel.dashboard')->with('success', 'Surat berhasil divalidasi oleh operator.');
        }

        public function letterSekdes(){
            $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
            if(empty($PermissionRoles))
            {
                abort(401);
            }
    
            $surats = Surat::with('user')->where('status','=',1)
            ->join('users', 'surats.user_id', '=', 'users.id')
            ->select('surats.*')
            ->get();
        
            return view('panel.validasiSurat.validasiSekdes', compact('surats'));
            
            }

            public function validateSekdes(Request $request, $id)
            {
                $surat = Surat::findOrFail($id);
                $surat->status = 2; // Set status as validated by Sekretaris Desa
                $surat->save();
        
                return redirect()->back()->with('success', 'Surat berhasil divalidasi oleh Sekretaris Desa.');
            }

            public function validateNote(Request $request, $id)
            {
                // Validasi input
                $request->validate([
                    'catatan' => 'required|string',
                ]);
            
                // Temukan surat berdasarkan ID
                $surat = Surat::findOrFail($id);
            
                // Update status surat menjadi -1 dan simpan catatan penolakan
                $surat->status = -1;
                $surat->catatan_penolakan = $request->input('catatan');
                $surat->save();
            
                // Redirect ke halaman yang sesuai dengan pesan sukses
                return redirect()->route('panel.dashboard')->with('success', 'Surat berhasil ditolak dengan catatan.');
            }
            
        
        
        public function historySurat()
        {
            $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
            if(empty($PermissionRoles))
            {
                abort(401);
            }
    
            $surats = Surat::with('user')->where('status','!=',0)
            ->join('users', 'surats.user_id', '=', 'users.id')
            ->select('surats.*')
            ->get();
        
            return view('panel.validasiSurat.history', compact('surats'));
        
        }

        public function assignNomorSurat(Request $request, $id)
        {
            $surat = Surat::findOrFail($id);
            $time = Carbon::create($surat->created_at); // Menggunakan $surat bukan $data
            $time = $time->toDateString();
            $arr = explode('-', $time);
            $nomorSurat = $id . '/' . $arr[0] . '/' . $arr[1] . '/' . $arr[2];
    
            $surat->nomor_surat = $nomorSurat;
            $surat->save();
    
            return redirect()->back()->with('success', 'Nomor surat berhasil diassign.');
        }

        public function letterKades()
{
    $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
    if(empty($PermissionRoles))
    {
        abort(401);
    }

    $surats = Surat::with('user')->where('status','=',2)
        ->join('users', 'surats.user_id', '=', 'users.id')
        ->select('surats.*')
        ->get();

    return view('panel.validasiSurat.validasiKades', compact('surats'));
}

public function validateKades(Request $request, $id)
{
    $request->validate([
        'tanda_tangan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $surat = Surat::findOrFail($id);
    $surat->status = 3; // Set status as validated by Kepala Desa

    if ($request->hasFile('tanda_tangan')) {
        $image = $request->file('tanda_tangan');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/tanda_tangan');
        $image->move($destinationPath, $name);
        $surat->tanda_tangan = $name;
    }

    $surat->save();

    return redirect()->back()->with('success', 'Surat berhasil divalidasi dan ditandatangani oleh Kepala Desa.');
    }


    public function validasiSudahTTD (){
        $PermissionRoles = RoleHasPermissionModel::getPermission('Surat', Auth::user()->role_id);
        if(empty($PermissionRoles))
        {
            abort(401);
        }

        $surats = Surat::with('user')->where('status','=',3)
        ->join('users', 'surats.user_id', '=', 'users.id')
        ->select('surats.*')
        ->get();
    
        return view('panel.validasiSurat.detailTTD', compact('surats'));
        
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

    