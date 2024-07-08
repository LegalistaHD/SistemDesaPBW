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
                ['jenis_surat_id' => 1, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 1, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 1, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Waktu Lahir'],
                ['jenis_surat_id' => 1, 'field' => 'umur', 'type' => 'text', 'nama' => 'Umur'],
                ['jenis_surat_id' => 1, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 1, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 1, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 1, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 1, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 1, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 1, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor KK'],
                ['jenis_surat_id' => 1, 'field' => 'keperluan', 'type' => 'text', 'nama' => 'Keterangan'],
                ['jenis_surat_id' => 1, 'field' => 'berlaku', 'type' => 'text', 'nama' => 'Berlaku Hingga'],
                ['jenis_surat_id' => 1, 'field' => 'golonganDarah', 'type' => 'text', 'nama' => 'Golongan Darah'],
                //Surat Wali
                ['jenis_surat_id' => 2, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 2, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 2, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 2, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 2, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 2, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 2, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 2, 'field' => 'namaWali', 'type' => 'text', 'nama' => 'Nama Wali'],
                ['jenis_surat_id' => 2, 'field' => 'tempatLahirWali', 'type' => 'text', 'nama' => 'Tempat Lahir Wali'],
                ['jenis_surat_id' => 2, 'field' => 'tanggalLahirWali', 'type' => 'date', 'nama' => 'Tanggal Lahir Wali'],
                ['jenis_surat_id' => 2, 'field' => 'agamaWali', 'type' => 'text', 'nama' => 'Agama Wali'],
                ['jenis_surat_id' => 2, 'field' => 'pekerjaanWali', 'type' => 'text', 'nama' => 'Pekerjaan Wali'],
                ['jenis_surat_id' => 2, 'field' => 'alamatWali', 'type' => 'text', 'nama' => 'Alamat Wali'],
                ['jenis_surat_id' => 2, 'field' => 'hubungan', 'type' => 'text', 'nama' => 'Hubungan'],
                ['jenis_surat_id' => 2, 'field' => 'sebab', 'type' => 'text', 'nama' => 'Sebab'],

                //Surat Keramaian
                ['jenis_surat_id' => 3, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 3, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 3, 'field' => 'tanggalLahir', 'type' => 'text', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 3, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 3, 'field' => 'umur', 'type' => 'text', 'nama' => 'Umur'],
                ['jenis_surat_id' => 3, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Kelamin'],
                ['jenis_surat_id' => 3, 'field' => 'pendidikan', 'type' => 'text', 'nama' => 'Pendidikan'],
                ['jenis_surat_id' => 3, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 3, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 3, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 3, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor Kk'],
                ['jenis_surat_id' => 3, 'field' => 'keperluan', 'type' => 'text', 'nama' => 'Pendidikan'],
                ['jenis_surat_id' => 3, 'field' => 'status', 'type' => 'text', 'nama' => 'Status'],
                ['jenis_surat_id' => 3, 'field' => 'rt', 'type' => 'text', 'nama' => 'Rt'],
                ['jenis_surat_id' => 3, 'field' => 'rw', 'type' => 'text', 'nama' => 'Rw'],
                ['jenis_surat_id' => 3, 'field' => 'dusun', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 3, 'field' => 'desa', 'type' => 'text', 'nama' => 'Desa'],
                ['jenis_surat_id' => 3, 'field' => 'kecamatan', 'type' => 'text', 'nama' => 'Kecamatan'],
                ['jenis_surat_id' => 3, 'field' => 'kabupaten', 'type' => 'text', 'nama' => 'Kabupaten'],
                //Surat Domisili
                ['jenis_surat_id' => 4, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 4, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 4, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 4, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 4, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 4, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 4, 'field' => 'status', 'type' => 'text', 'nama' => 'Status'],
                ['jenis_surat_id' => 4, 'field' => 'pendidikan', 'type' => 'text', 'nama' => 'Pendidikan'],
                ['jenis_surat_id' => 4, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 4, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 4, 'field' => 'rt', 'type' => 'text', 'nama' => 'Rt'],
                ['jenis_surat_id' => 4, 'field' => 'rw', 'type' => 'text', 'nama' => 'Rw'],
                ['jenis_surat_id' => 4, 'field' => 'dusun', 'type' => 'text', 'nama' => 'Dusun'],
                ['jenis_surat_id' => 4, 'field' => 'desa', 'type' => 'text', 'nama' => 'Desa'],
                ['jenis_surat_id' => 4, 'field' => 'kecamatan', 'type' => 'text', 'nama' => 'Kecamatan'],
                ['jenis_surat_id' => 4, 'field' => 'kabupaten', 'type' => 'text', 'nama' => 'Kabupaten'],
                ['jenis_surat_id' => 4, 'field' => 'keperluan', 'type' => 'text', 'nama' => 'Keperluan'],
                //Surat Dispensasi Waktu
                ['jenis_surat_id' => 5, 'field' => 'acara', 'type' => 'text', 'nama' => 'Nama Acara'],
                ['jenis_surat_id' => 5, 'field' => 'tanggal', 'type' => 'date', 'nama' => 'Tanggal'],
                ['jenis_surat_id' => 5, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 5, 'field' => 'tempat', 'type' => 'text', 'nama' => 'Tempat Dispensasi'],
                ['jenis_surat_id' => 5, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                //Surat Kelahiran
                ['jenis_surat_id' => 6, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 6, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 6, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 6, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 6, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 6, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 6, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 6, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 6, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 6, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor KK'],
                ['jenis_surat_id' => 6, 'field' => 'berlaku', 'type' => 'text', 'nama' => 'Berlaku Hingga'],
                ['jenis_surat_id' => 6, 'field' => 'golonganDarah', 'type' => 'text', 'nama' => 'Golongan Darah'],
                //Surat Permohonan Akta
                ['jenis_surat_id' => 7, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 7, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 7, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 7, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 7, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 7, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 7, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 7, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 7, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 7, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor KK'],
                ['jenis_surat_id' => 7, 'field' => 'golonganDarah', 'type' => 'text', 'nama' => 'Golongan Darah'],
                //Surat Permohonan Penduduk
                ['jenis_surat_id' => 8, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 8, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 8, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 8, 'field' => 'status', 'type' => 'text', 'nama' => 'Status'],
                ['jenis_surat_id' => 8, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 8, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 8, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 8, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 8, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 8, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 8, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor KK'],
                ['jenis_surat_id' => 8, 'field' => 'berlaku', 'type' => 'text', 'nama' => 'Berlaku Hingga'],
                ['jenis_surat_id' => 8, 'field' => 'keterangan', 'type' => 'date', 'nama' => 'Keterangan'],
                //Surat Permohonan Cerai
                ['jenis_surat_id' => 9, 'field' => 'namaLengkap', 'type' => 'text', 'nama' => 'Nama Lengkap'],
                ['jenis_surat_id' => 9, 'field' => 'tempatLahir', 'type' => 'text', 'nama' => 'Tempat Lahir'],
                ['jenis_surat_id' => 9, 'field' => 'tanggalLahir', 'type' => 'date', 'nama' => 'Tanggal Lahir'],
                ['jenis_surat_id' => 9, 'field' => 'umur', 'type' => 'text', 'nama' => 'Umur'],
                ['jenis_surat_id' => 9, 'field' => 'wargaNegara', 'type' => 'text', 'nama' => 'Warga Negara'],
                ['jenis_surat_id' => 9, 'field' => 'agama', 'type' => 'text', 'nama' => 'Agama'],
                ['jenis_surat_id' => 9, 'field' => 'kelamin', 'type' => 'text', 'nama' => 'Jenis Kelamin'],
                ['jenis_surat_id' => 9, 'field' => 'pekerjaan', 'type' => 'text', 'nama' => 'Pekerjaan'],
                ['jenis_surat_id' => 9, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 9, 'field' => 'nik', 'type' => 'text', 'nama' => 'NIK'],
                ['jenis_surat_id' => 9, 'field' => 'nomorKk', 'type' => 'text', 'nama' => 'Nomor KK'],
                ['jenis_surat_id' => 9, 'field' => 'keperluan', 'type' => 'text', 'nama' => 'Keterangan'],
                ['jenis_surat_id' => 9, 'field' => 'berlaku', 'type' => 'text', 'nama' => 'Berlaku Hingga'],
                ['jenis_surat_id' => 9, 'field' => 'golonganDarah', 'type' => 'date', 'nama' => 'Golongan Darah'],
                //Surat Undangan
                ['jenis_surat_id' => 10, 'field' => 'kepadaYth', 'type' => 'text', 'nama' => 'Kepada Yth.'],
                ['jenis_surat_id' => 10, 'field' => 'alamat', 'type' => 'text', 'nama' => 'Alamat'],
                ['jenis_surat_id' => 10, 'field' => 'waktu', 'type' => 'date', 'nama' => 'Waktu'],
                ['jenis_surat_id' => 10, 'field' => 'tempat', 'type' => 'text', 'nama' => 'Tempat'],
                ['jenis_surat_id' => 10, 'field' => 'acara', 'type' => 'text', 'nama' => 'Acara'],
                ['jenis_surat_id' => 10, 'field' => 'namaPengirim', 'type' => 'text', 'nama' => 'Nama Pengirim'],
            ]);
        
    }
}
