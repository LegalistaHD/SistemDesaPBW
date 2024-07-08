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
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
        <div class="col-8 shadow-lg mt-4 mb-4 p-5">
        <h1>UNDANGAN</h1>
        <div class="tujuan-surat">
            <table>
                <tr>
                    <td>Kepada Yth</td>
                    <td>:</td>
                    <td>{{ nama_tujuan }}</td>
                </tr>
                <tr>
                    <td>Alamat  </td>
                    <td>:</td>
                    <td>{{ alamat }}</td>
                </tr>
            </table>
            <p>Assalamu’alaikum Wr. Wb.</p>
            <p>Melalui   undangan   ini,   kami segenap keluarga alamarhum Bp. Sukijan mengharap kehadiran Bapak / Saudara pada,</p>
            <table>
                <tr>
                    <td>Hari/Tanggal</td>
                    <td>:</td>
                    <td>{{ Hari/Tanggal }}</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td>{{ Waktu_acara }}</td>
                </tr>
                <tr>
                    <td>Tempat</td>
                    <td>:</td>
                    <td>{{ tempat_acara }}</td>
                </tr>
                <tr>
                    <td>Acara</td>
                    <td>:</td>
                    <td>{{ acara }}</td>
                </tr>
            </table>
            <p>Demikianlah surat undangan ini kami sampaikan. Atas perhatian dan kehadirannya, kami ucapkan banyak    terimakasih.</p>
            <p>Wassalamu’alaikum Wr. Wb</p>

            <div class="tanda_tangan text-center">
                <h4 class="mb-5">Hormat  Kami,</h4>
                <h4> {{ nama_pengirim }}</h4>
            </div>
        </div>
        
        
        
        
    </div>
    <div class="col-2"></div>
    </div>
    </div>
</body>
</html>