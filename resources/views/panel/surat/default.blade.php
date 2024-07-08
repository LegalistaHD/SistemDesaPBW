<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Surat</title>
</head>
<body>
  <p>{{ $surat->user_id }}</p>
  <p>{{ $surat->jenisSurat->nama_jenis }}</p>
  <p>{{ $surat->jenisSurat->deskripsi }}</p>
  <p>{{ $surat->status }}</p>
</body>
</html>