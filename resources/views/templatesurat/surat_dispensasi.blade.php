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
            <h1>Pemerintah Kabupaten {{ kabupaten }}</h1>
            <h2>Kecamatan {{ kecamatan }}</h2>
            <h2>{{ desa }}</h2>
            <h4>{{ alamat_desa }}</h4>
        </div>
        <hr>
        <!-- INI Judul Surat -->
        <div class="judul-surat">
            <h2>{{ judul_surat }}</h2>
            <h4>Nomor: {{ nomor }}/{{ tahun }}</h4>
        </div>
        
        <p>Sehubung akan diadakannya {{ nama_acara }} yang akan dilaksanakan pada</p>
        
        <table class="mb-2">
            <tr>
                <td>Hari</td>
                <td>:</td>
                <td>{{ Tanggal }}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ tanggal }}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>{{ tempat }}</td>
            </tr>
            </table>
            <p>Demi kelancaran kegiatan tersebut mohon diberikan izin dispensasi</p>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ nama }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ nip }}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{ jabatan }}</td>
                </tr>
            </table>


        <div class="text-end mt-4">
            <p>{{ tempat }}, {{ tanggal }}</p>
            <p><strong>{{ kepala_desa }}</strong></p>
            <p>Kepala Desa {{ desa }}</p>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    
    </div>
</body>
</html>