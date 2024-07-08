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
        
        <p>Yang bertanda tangan dibawah ini, Kecamatan {{ kecamatan }} dengan ini menerangkan bahwa :</p>
        
        <table class="mb-2">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ nama }}</td>
            </tr>
            <tr>
                <td>jenis Kelamin</td>
                <td>:</td>
                <td>{{ nik }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ agama }}</td>
            </tr>
            <tr>
                <td>Anak ke</td>
                <td>:</td>
                <td>{{ nomer_anak }}</td>
            </tr>
            <tr>
                <td>hari/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ hari/tgl }}</td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>{{ pukul }}</td>
            </tr>
            <tr>
                <td>Jenis Kelaminn</td>
                <td>:</td>
                <td>{{ jk }}</td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td>{{ bb }}</td>
            </tr>
            </table>
            <p>Nama Orangtua</p>
            
            <table>
                <tr>
                    <td>Ayah</td>
                    <td>:</td>
                    <td>{{ ayah }}</td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>:</td>
                    <td>{{ ibu }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ alamat }}</td>
                </tr>
                
            </table>
            <p>Surat keterangan ini sebagai persyaratanuntuk mengurus Akta kelahiran pada Dinas Kependudukan dan Pencatatan Sipil Kota {{ kota }}</p>
            <p>Demikian surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.</p>
            


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