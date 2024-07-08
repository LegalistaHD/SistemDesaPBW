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
        <table class="table">
            <tr>
                <td>112</td>
                <td>80581</td>
            </tr>
        </table>
        <hr>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            {{-- <h2>{{ judul_surat }}</h2> --}}
            {{-- <h4>Nomor: {{ nomor }}/{{ tahun }}</h4> --}}
        </div>
        
        <p>yang bertanda tangan di bawah ini :</p>
        
        <table class="mb-2">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'namaLengkap')->first()->value }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'nik')->first()->value }}</td>
            </tr>
            {{-- <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ tgl }}</td>
            </tr> --}}
            {{-- <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ nik }}</td>
            </tr> --}}
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'agama')->first()->value }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'wargaNegara')->first()->value }}</td>
            </tr>
            {{-- <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>{{ nik }}</td>
            </tr> --}}
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'pekerjaan')->first()->value }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $detailSurat->where('field', 'alamat')->first()->value }}</td>
            </tr>
            {{-- <tr>
                <td>No HP</td>
                <td>:</td>
                <td>{{ nik }}</td>
            </tr> --}}
            </table>
            <p>Selanjutnya disebut sebagai <b>Pemohon</b></p>
            <p>Dengan ini perkenankanlah kami mengajukan permohonan cerai talak terhadap:</p>
            {{-- <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>{{ nama }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ tgl }}</td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td>{{ nik }}</td>
                </tr>
            </table> --}}
            <p>Selanjutnya disebut sebagai <b>Termohon</b></p>
            


        <div class="text-end mt-4">
            {{-- <p>{{ tempat }}, {{ tanggal }}</p>
            <p><strong>{{ kepala_desa }}</strong></p>
            <p>Kepala Desa {{ desa }}</p> --}}
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <a class="btn btn-primary" href="/generate-PDF/{{ $surat->id }}" role="button" style="margin-bottom: 10px">Download Surat</a>
    </div>
</body>
</html>