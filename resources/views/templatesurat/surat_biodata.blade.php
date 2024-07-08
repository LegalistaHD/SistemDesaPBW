<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Surat</title>
    <style>
        /* INI Style nya */
        .kop-surat {
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
        }
    </style>
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
        
        <p>Yang bertanda tangan di bawah ini kami Desa Bedulu, Kecamatan Blahbatuh, Kabupaten Gianyar, menerangkan dengan sebenarnya bahwa:</p>

        {{-- <p>Yang bertanda tangan di bawah ini kami Desa {{ nama_desa }}, Kecamatan {{ nama_kec }}, Kabupaten {{ nama_kab }}, menerangkan dengan sebenarnya bahwa:</p>
         --}}
        <table>
            <tr>
                <td style="width: 200px;">Nama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'namaLengkap')->first()->value }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'tempatLahir')->first()->value }} / {{ $detailSurat->where('field', 'tempatLahir')->first()->value }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'umur')->first()->value }}</td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'wargaNegara')->first()->value }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'agama')->first()->value }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'kelamin')->first()->value }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pekerjaan')->first()->value }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'nomorKk')->first()->value }}</td>
            </tr>
        </table>

        <p>Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>

        <div class="row mt-5">
            <div class="col-6 text-center">
                <p>Mengetahui,</p>
                <p><strong>Kepala Desa</strong> Lanang Purbhawa</p>
                <p></p>
            </div>
            <div class="col-6 text-center">
                <p>Jimbaran, 11 Juni</p>
                <p><strong>Lanang Purbhawa</strong></p>
                <p>Kepala Desa Bedulu</p>
                
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="/generate-PDF/{{ $surat->id }}" role="button" style="margin-bottom: 10px">Download Surat</a>
</body>
</html>