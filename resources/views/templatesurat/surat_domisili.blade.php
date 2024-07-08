<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Surat DOMISILI</title>
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
        <hr>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            <h2>{{ $jenisSurat }}</h2>
            <h4>Nomor: {{ $surat->nomor_surat }}</h4>
        </div>
        
        <p>Yang bertanda tangan di bawah ini kami Desa {{ $detailSurat->where('field', 'desa')->first()->value }} , Kecamatan {{ $detailSurat->where('field', 'kecamatan')->first()->value }} , Kabupaten {{ $detailSurat->where('field', 'kabupaten')->first()->value }} , menerangkan dengan sebenarnya bahwa:</p>
        
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
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'kelamin')->first()->value }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'agama')->first()->value }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'status')->first()->value }}</td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pendidikan')->first()->value }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pekerjaan')->first()->value }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'wargaNegara')->first()->value }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Desa {{ $detailSurat->where('field', 'desa')->first()->value }}, Kecamatan {{ $detailSurat->where('field', 'kecamatan')->first()->value }}, Kabupaten {{ $detailSurat->where('field', 'kabupaten')->first()->value }}
                </td>
            </tr>
            </table>
            

        <p class="mt-4" >Orang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di  RT {{ $detailSurat->where('field', 'rt')->first()->value }} RW {{ $detailSurat->where('field', 'rw')->first()->value }} Dusun {{ $detailSurat->where('field', 'dusun')->first()->value }} {{ $detailSurat->where('field', 'desa')->first()->value }} dan tercatat dengan No. KK : {{ $detailSurat->where('field', 'nomorKk')->first()->value }} Kepala Keluarga : {{ $detailSurat->where('field', 'namaLengkap')->first()->value }}.</p>
        <p class="mt-4">Surat Keterangan ini dibuat untuk Keperluan : {{ $detailSurat->where('field', 'keperluan')->first()->value }}.        </p>
        <p class="mt-4">Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</p>

        <div class="text-end mt-4">
            <p>Bedulu, 9 juli 2024</p>
            <p><strong>Mardana</strong></p>
            <p>Kepala Desa Bedulu</p>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    
    </div>
    <a class="btn btn-primary" href="/generate-PDF/{{ $surat->id }}" role="button" style="margin-bottom: 10px">Download Surat</a>
</body>
</html>