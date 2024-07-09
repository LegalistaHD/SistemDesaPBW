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
  <img src="{{ $surat->tanda_tangan }}"/>
  {{-- @if($surat->tanda_tangan)
    <p>Tanda Tangan:</p>
    <img src="{{ asset('tanda_tangan/' . $surat->tanda_tangan . '.png') }}" alt="Tanda Tangan" style="width: 150px; height: auto;">
  @endif --}}

</body>
</html>
