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
        
        <p>Yang bertanda tangan di bawah ini Kepala Desa {{ nama_desa }} Kecamatan {{nama_kecamatan}} Kabupaten {{ nama_kab }} Provinsi {{ nama_provinsi }} menerangkan dengan sebenarnya bahwa :
        </p>
        
        <table>
            <tr>
                <td style="width: 200px;">Nama Lengkap</td>
                <td>:</td>
                <td>{{ s.name }}</td>
            </tr>
            <tr>
                <td>NIK/Nomor KTP</td>
                <td>:</td>
                <td>{{ s.ktp }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ s.ttl }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ jk }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ s.agama }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{ s.status }}</td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>{{ s.pendidikan }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ s.pekerjaan }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>{{ s.kewarganegaraan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ alamat }} Desa {{ nama_des }}, Kecamatan {{ nama_kec }}, Kabupaten [{{ nama_kab }}
                </td>
            </tr>
            </table>
            

        <p class="mt-4" >Orang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di {{ alamat }} RT {{ rt }} RW {{ rw }} Dusun {{ dusun }} {{ sebutan_desa }} {{ nama_desa }} dan tercatat dengan No. KK : {{ no_ktp }} Kepala Keluarga : {{ kepala_kk }}.</p>
        <p class="mt-4">Surat Keterangan ini dibuat untuk Keperluan : {{ keperluan }}.        </p>
        <p class="mt-4">Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</p>

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