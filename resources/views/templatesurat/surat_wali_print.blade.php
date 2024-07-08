<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Surat</title>
    <style>.kop-surat {
        text-align: center;
        margin-bottom: 2em;
    }
    .kop-surat h1 {
        font-size: 24px;
        font-weight: bold;
    }
    .kop-surat h2 {
        font-size: 20px;
    }
    .kop-surat h4 {
        font-size: 16px;
    }
    .judul-surat {
        text-align: center;
        margin: 2em 0;
    }
    .judul-surat h2 {
        font-size: 22px;
        font-weight: bold;
    }
    .judul-surat h4 {
        font-size: 18px;
    }</style>
</head>
<body>
    
    
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
        <div class="col-8 shadow-lg mt-4 mb-4 p-5">
        <!-- INI Kopsurat -->
        <div class="kop-surat">
            <h1>Pemerintah Kabupaten Gianyar</h1>
            <h2>Kecamatan Blahbatuh</h2>
            <h2>Desa Bedulu</h2>
            <h4>Jalan Raya Yeh Pulu, Desa Bedulu 80581</h4>
        </div>
        <table class="table">
            <tr>
                <td>112</td>
                <td>80581</td>
            </tr>
        </table>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            <h2>{{ $jenisSurat }}</h2>
            <h4>Nomor: {{ $surat->nomor_surat }}</h4>
            {{-- <h2>{{ judul_surat }}</h2>
            <h4>Nomor: {{ nomor }}/{{ tahun }}</h4> --}}
        </div>
        
        
        <p>Yang bertanda tangan di bawah ini Kepala desa {{ $detailSurat->where('field', 'desa')->first()->value }}, Kecamatan {{ $detailSurat->where('field', 'kecamatan')->first()->value }}, Kabupaten {{ $detailSurat->where('field', 'kabupaten')->first()->value }} , Provinsi Bali menerangkan dengan sebenarnya bahwa mempelai perempuan:
        </p>
        
        <table>
            <tr>
                <td style="width: 200px;">Nama Lengkap</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'namaLengkap')->first()->value }}</td>
            </tr>
            <tr>
                <td>NIK/Nomor KTP</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'nik')->first()->value }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'tempatLahir')->first()->value }}/{{ $detailSurat->where('field', 'tanggalLahir')->first()->value }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Desa {{ $detailSurat->where('field', 'desa')->first()->value }}, Kecamatan {{ $detailSurat->where('field', 'kecamatan')->first()->value }}, Kabupaten {{ $detailSurat->where('field', 'kabupaten')->first()->value }}
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'agama')->first()->value }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pekerjaan')->first()->value }}</td>
            </tr>
            </table>
            <table>
                <p class="mt-2"><strong>yang berhak menjadi wali adalah:</strong> </p>
            <tr>
                <td style="width: 200px;">Nama Lengkap</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'namaWali')->first()->value }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'tempatLahirWali')->first()->value }}/{{ $detailSurat->where('field', 'tanggalLahirWali')->first()->value }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'agamaWali')->first()->value }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pekerjaanWali')->first()->value }}</td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'alamatWali')->first()->value }}</td>
            </tr>
            <tr>
                <td>Hubungan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'hubungan')->first()->value }}</td>
            </tr>
            <tr>
                <td>Sebab-sebab</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'sebab')->first()->value }}</td>
            </tr>
            
        </table>

        <p class="mt-4" >Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>

        <div class="text-end mt-4">
            <p>Bedulu, 24 Juli</p>
            <p><strong>Herdy Junilawan</strong></p>
            <p>Kepala Desa Bedulu</p>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    
    </div>
</body>
</html>