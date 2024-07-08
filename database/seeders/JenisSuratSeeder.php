<?php

namespace Database\Seeders;


use Carbon\Carbon;
use App\Models\JenisSurat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisSuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        JenisSurat::truncate();
        Schema::enableForeignKeyConstraints();
        //
        DB::table('jenis_surats')->insert([
            ['nama_jenis' => 'Surat Biodata Penduduk', 'deskripsi' => 'Surat Biodata Penduduk adalah dokumen resmi yang memuat informasi lengkap mengenai identitas seorang penduduk. Dokumen ini biasanya dikeluarkan oleh instansi pemerintah setempat, seperti kelurahan atau desa, dan berfungsi untuk berbagai keperluan administrasi, termasuk pengajuan KTP, KK, surat keterangan domisili, dan lain-lain.', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Wali',
             'deskripsi' => 'Surat wali adalah dokumen resmi yang menyatakan seseorang ditunjuk sebagai wali dari individu yang tidak dapat bertindak atas namanya sendiri, seperti anak di bawah umur, orang dengan kebutuhan khusus, atau orang yang tidak mampu secara hukum. Surat ini biasanya diperlukan dalam berbagai situasi hukum dan administratif untuk memastikan hak dan kepentingan individu yang berada di bawah perwalian tersebut terlindungi. Berikut adalah penjelasan lebih rinci mengenai surat wali:', 'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Keramaian', 'deskripsi' => 'Surat Keramaian adalah dokumen resmi yang diperlukan untuk mengadakan acara yang melibatkan keramaian atau perkumpulan massa, seperti pesta pernikahan, konser, festival, pawai, atau kegiatan lainnya yang berpotensi menarik banyak orang. ', 'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Domisili', 'deskripsi' => 'Surat Domisili adalah dokumen resmi yang dikeluarkan oleh pemerintah setempat, seperti kantor kelurahan atau desa, yang menyatakan bahwa seseorang tinggal atau berdomisili di wilayah tertentu. Surat ini biasanya diperlukan untuk berbagai keperluan administratif, seperti pendaftaran sekolah, pembuatan kartu identitas, pengajuan kredit, atau keperluan lainnya yang memerlukan bukti tempat tinggal.', 'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Dispensasi Waktu', 'deskripsi' => 'Surat Dispensasi Waktu adalah dokumen resmi yang dikeluarkan oleh suatu instansi, organisasi, atau lembaga pendidikan yang memberikan izin khusus kepada individu untuk tidak mengikuti kegiatan atau kewajiban tertentu pada waktu yang telah ditentukan. Dispensasi waktu ini biasanya diberikan karena adanya alasan khusus atau keadaan darurat yang memerlukan kebijakan khusus.', 'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Kelahiran', 'deskripsi' => 'Surat Kelahiran adalah dokumen resmi yang dikeluarkan oleh instansi pemerintah, seperti kantor catatan sipil atau dinas kependudukan dan pencatatan sipil, yang mencatat kelahiran seorang anak. Surat ini merupakan bukti hukum mengenai kelahiran anak dan mencakup informasi penting tentang identitas anak serta orang tuanya.', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Permohonan Akta', 'deskripsi' => 'Surat Permohonan Akta adalah dokumen resmi yang digunakan untuk mengajukan permohonan penerbitan atau perubahan akta tertentu kepada instansi yang berwenang, seperti kantor catatan sipil atau dinas kependudukan dan pencatatan sipil. Akta yang dimaksud bisa berupa akta kelahiran, akta perkawinan, akta perceraian, akta kematian, atau akta pengakuan anak. ', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Permohonan Penduduk', 'deskripsi' => 'Surat Permohonan Penduduk adalah dokumen resmi yang diajukan oleh seorang warga kepada instansi pemerintah, seperti kantor kelurahan atau dinas kependudukan dan pencatatan sipil, untuk keperluan tertentu yang berhubungan dengan status kependudukan. ', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Permohonan Cerai', 'deskripsi' => 'Surat Permohonan Cerai adalah dokumen resmi yang diajukan oleh salah satu pasangan yang ingin mengajukan perceraian ke Pengadilan Agama (bagi yang beragama Islam) atau Pengadilan Negeri (bagi yang beragama lain). Surat ini mencakup alasan perceraian, data lengkap kedua belah pihak, dan permohonan resmi untuk memproses perceraian tersebut.', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['nama_jenis' => 'Surat Undangan', 'deskripsi' => 'Surat Undangan adalah dokumen resmi yang digunakan untuk mengundang seseorang atau sekelompok orang untuk menghadiri suatu acara, pertemuan, atau kegiatan tertentu.', 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],




            
        ]);

       
    }
}
