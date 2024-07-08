<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .kop-surat, .judul-surat, .row {
            text-align: center;
            margin-bottom: 2em;
        }

        .kop-surat h1, .kop-surat h2, .kop-surat h4,
        .judul-surat h2, .judul-surat h4 {
            margin: 0.5em 0;
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

        .judul-surat h2 {
            font-size: 22px;
            font-weight: bold;
        }

        .judul-surat h4 {
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1em;
        }

        table td {
            padding: 0.5em;
            vertical-align: top;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-top: 5em;
        }

        .col-6 {
            width: 48%;
        }

        .text-center {
            text-align: center;
        }

        .btn-primary {
            display: inline-block;
            padding: 0.5em 1em;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- INI Kopsurat -->
        <div class="kop-surat">
            <h1>Pemerintah Kabupaten Gianyar</h1>
            <h2>Kecamatan Blahbatuh</h2>
            <h2>Desa Bedulu</h2>
            <h4>Jalan Raya Yeh Pulu, Desa Bedulu 80581</h4>
        </div>
        <table>
            <tr>
                <td>112</td>
                <td>80581</td>
            </tr>
        </table>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            <h2>{{ $jenisSurat }}</h2>
            <h4>Nomor: {{ $surat->nomor_surat }}</h4>
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
                <td>{{ $detailSurat->where('field', 'tempatLahir')->first()->value }} / {{ $detailSurat->where('field', 'tanggalLahir')->first()->value }}</td>
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
    <a class="btn btn-primary" href="/generate-PDF/{{ $surat->id }}" role="button">Download Surat</a>
</body>
</html>
