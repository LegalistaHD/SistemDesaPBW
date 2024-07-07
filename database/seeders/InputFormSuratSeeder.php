<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon; // T

class InputFormSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Schema::disableForeignKeyConstraints();
            DB::table('input_form_surats')->truncate(); 
            Schema::enableForeignKeyConstraints();
    
            DB::table('input_form_surats')->insert([
                //Surat Biodata Penduduk
                ['jenis_surat_id' => 1,'field' => 'namaLengkap','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'waktuLahir','type' => 'date',],
                ['jenis_surat_id' => 1,'field' => 'umur','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'wargaNegara','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'agama','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'kelamin','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'pekerjaan','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'alamat','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'nik','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'nomorKk','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'keperluan','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'berlaku','type' => 'text',],
                ['jenis_surat_id' => 1,'field' => 'golonganDarah','type' => 'text',],
                //Surat Wali
                ['jenis_surat_id' => 2,'field' => 'namaLengkap','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'nik','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'tanggalLahir','type' => 'date',],
                ['jenis_surat_id' => 2,'field' => 'alamat','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'agama','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'pekerjaan','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'namaWali','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'tanggalLahir','type' => 'date',],
                ['jenis_surat_id' => 2,'field' => 'agama','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'pekerjaan','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'alamat','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'hubungan','type' => 'text',],
                ['jenis_surat_id' => 2,'field' => 'sebab','type' => 'text',],
                //Surat Keramaian
                ['jenis_surat_id' => 3,'field' => 'namaLengkap','type' => 'text',],
                ['jenis_surat_id' => 3,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 3,'field' => 'umur','type' => 'text',],
                ['jenis_surat_id' => 3,'field' => 'namaLengkap','type' => 'text',],
                //Surat Domisili
                ['jenis_surat_id' => 4,'field' => 'namaLengkap','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'nik','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'tanggalLahir','type' => 'date',],
                ['jenis_surat_id' => 4,'field' => 'kelamin','type' => 'text', ],
                ['jenis_surat_id' => 4,'field' => 'agama','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'status','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'pendidikan','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'pekerjaan','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'wargaNegara','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'alamat','type' => 'text',],
                ['jenis_surat_id' => 4,'field' => 'keperluan','type' => 'text',],
                //Surat Dispensasi Waktu
                ['jenis_surat_id' => 5,'field' => 'namaLengkap','type' => 'text',],
                ['jenis_surat_id' => 5,'field' => 'tempatLahir','type' => 'text',],
                ['jenis_surat_id' => 5,'field' => 'tanggalLahir','type' => 'date',],
                ['jenis_surat_id' => 5,'field' => 'pekerjaan','type' => 'text',],
                ['jenis_surat_id' => 5,'field' => 'alamat','type' => 'text',],
                //Surat Kelahiran
                [ 'jenis_surat_id' => 6, 'field' => 'namaLengkap','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'tempatLahir','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'wargaNegara','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'tanggalLahir','type' => 'date',],
                [ 'jenis_surat_id' => 6, 'field' => 'wargaNegara','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'agama','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'kelamin','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'pekerjaan','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'alamat','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'nik','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'nomorKk','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'berlaku','type' => 'text',],
                [ 'jenis_surat_id' => 6, 'field' => 'golonganDarah','type' => 'text',],
                //Surat Permohonan Akta
                [ 'jenis_surat_id' => 7, 'field' => 'namaLengkap','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'tempatLahir','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'tanggalLahir','type' => 'date',],
                [ 'jenis_surat_id' => 7, 'field' => 'wargaNegara','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'agama','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'kelamin', 'type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'pekerjaan','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'alamat','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'nik','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'nomorKk','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'berlaku','type' => 'text',],
                [ 'jenis_surat_id' => 7, 'field' => 'golonganDarah','type' => 'text',],
                 //Surat Permohonan Penduduk
                 [ 'jenis_surat_id' => 8, 'field' => 'namaLengkap','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'tempatLahir','type' => 'text',],
                 [ 'jenis_surat_id' => 7, 'field' => 'tanggalLahir','type' => 'date',],
                 [ 'jenis_surat_id' => 8, 'field' => 'status','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'wargaNegara','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'agama','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'kelamin', 'type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'pekerjaan','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'alamat','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'nik','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'nomorKk','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'berlaku','type' => 'text',],
                 [ 'jenis_surat_id' => 8, 'field' => 'keterangan','type' => 'date',],
                 // Surat Permohonan Cerai
                 [ 'jenis_surat_id' => 9, 'field' => 'namaLengkap','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'tempatLahir','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'tanggalLahir','type' => 'date',],
                 [ 'jenis_surat_id' => 9, 'field' => 'umur','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'wargaNegara','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'agama','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'kelamin', 'type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'pekerjaan','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'alamat','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'nik','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'nomorKk','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'keperluan','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'berlaku','type' => 'text',],
                 [ 'jenis_surat_id' => 9, 'field' => 'golonganDarah','type' => 'date',],
                 // Surat Undangan
                 [ 'jenis_surat_id' => 10, 'field' => 'kepadaYth','type' => 'text',],
                 [ 'jenis_surat_id' => 10, 'field' => 'alamat','type' => 'text',],
                 [ 'jenis_surat_id' => 10, 'field' => 'hari','type' => 'text',],
                 [ 'jenis_surat_id' => 10, 'field' => 'waktu','type' => 'text',],
                 [ 'jenis_surat_id' => 10, 'field' => 'tempat','type' => 'text',],
                 [ 'jenis_surat_id' => 10, 'field' => 'acara','type' => 'date',],
            ]);
        
    }
}
