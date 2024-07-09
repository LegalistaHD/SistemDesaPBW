<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use Carbon\Carbon;

class ChartController extends Controller


{
  public function index()
    {
        // Mengambil data surat dengan status 3 dan join dengan tabel users
        $surats = Surat::with('user')
            ->where('status', '=', 3)
            ->join('users', 'surats.user_id', '=', 'users.id')
            ->select('surats.*')
            ->get();

        // Menghitung jumlah surat per kategori
        $suratData = $surats->groupBy('jenis_surat_id')->map(function ($item) {
            return $item->count();
        });

        // Mengambil nama jenis surat dari tabel jenis_surats
        $categories = Surat::with('jenis_surat')
            ->whereIn('id', $suratData->keys())
            ->pluck('jenis_surat');

        // Menyusun data untuk chart
        $counts = $suratData->values();

        return view('panel.statistik', compact('categories', 'counts'));
    }
}

