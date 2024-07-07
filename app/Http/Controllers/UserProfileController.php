<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserProfile $profil)
    {
        $user = auth()->user();


        if ($user) {
            $p = $user->profil;

            if ($p == 0) {
                return view('panel.home.profile.create');
            }
            $data = UserProfile::where('user_id', $user->id )->first();
            return view('panel.home.profile.index', ['data' => $data]);
        }
        // Jika tidak ada pengguna yang sedang login, redirect ke halaman login
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userID = auth()->user()->id;
        $validated = $request->validate([
            'namaLengkap' => 'required|string|max:255',
            'tempatLahir' => 'required|string|max:255',
            'tanggalLahir' => 'required',
            'wargaNegara' => 'required|string|max:255',
            'kelamin' => 'required|integer|in:1,2',
            'pekerjaan' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'nik' => 'required|unique:user_profiles,nik',
            'nomorKk' => 'required',
            'golonganDarah' => 'required|string|max:2',
            'rt' => 'required|string|max:255',
            'rw' => 'required|string|max:255',
            'dusun' => 'required|string|max:255',
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',

        ]);
        $validated['user_id'] = $userID;


        DB::table('users')->where('id', $userID)->update(['profil' => 1]);

        DB::table('user_profiles')->insert($validated);

       

        return redirect('/');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
