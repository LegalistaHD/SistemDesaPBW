@extends(('panel.layouts.app'))

@section('content')
    {{-- <div class="pagetitle">
      <h1>Dashboard</h1>
    </div> --}}
    <section class="section profile">
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
           </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                  <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2 mb-5">
                            <h5 class="card-title text-center pb-0 fs-4">Input Profil</h5>
                            <p class="text-center small">Input form dibawah untuk membuat surat!</p>
                           
                          </div>
                        <form class="row g-3" action="/profile" method="POST">
                            @csrf
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="namaLengkap">Nama Lengkap:</label><br>
                                <input type="text" id="namaLengkap" name="namaLengkap" required class="form-control">
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7"  for="tempatLahir">Tempat Lahir:</label><br>
                                <input class="form-control" type="text" id="tempatLahir" name="tempatLahir" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="tanggalLahir">Tanggal Lahir:</label><br>
                                <input class="form-control" type="date" id="tanggalLahir" name="tanggalLahir" required>
                            </div>
                            {{-- <div class="col-12 mb-2">
                                <label for="bulan">Bulan Lahir:</label><br>
                                <select id="bulan" name="bulan" required>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                                </select>
                            </div> --}}
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="wargaNegara">Warga Negara:</label>
                                <input class="form-control" type="text" id="wargaNegara" name="wargaNegara" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7 me-3" for="kelamin">Jenis Kelamin:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kelamin1" name="kelamin" value="Laki-laki" required>
                                    <label class="form-check-label" for="kelamin1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kelamin2" name="kelamin" value="Perempuan" required>
                                    <label class="form-check-label" for="kelamin2">Perempuan</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="pekerjaan">Pekerjaan:</label><br>
                                <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7"  for="agama">Agama:</label><br>
                                <input class="form-control" type="text" id="agama" name="agama" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="nik">NIK:</label><br>
                                <input class="form-control" type="text" id="nik" name="nik" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="nomorKk">Nomor KK:</label><br>
                                <input class="form-control" type="text" id="nomorKk" name="nomorKk" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="golonganDarah">Golongan Darah:</label><br>
                                <input class="form-control" type="text" id="golonganDarah" name="golonganDarah" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="rt">RT:</label><br>
                                <input class="form-control" type="text" id="rt" name="rt" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7"  for="rw">RW:</label>
                                <input class="form-control" type="text" id="rw" name="rw" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="dusun">Dusun:</label>
                                <input class="form-control"type="text" id="dusun" name="dusun" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="desa">Desa:</label>
                                <input class="form-control" type="text" id="desa" name="desa" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="kecamatan">Kecamatan:</label>
                                <input class="form-control" type="text" id="kecamatan" name="kecamatan" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="mb-2 fw-bold fs-7" for="kabupaten">Kabupaten:</label>
                                <input class="form-control" type="text" id="kabupaten" name="kabupaten" required>
                            </div>
                           
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            
                        </form>
                    </div>
                  </div>


            </div>

        </div>
        
    </section>


    {{-- <section class="section profile">
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
           </div>
        @endif
        <form class="row g-3" action="/profile" method="POST">
            @csrf
            <div class="col-12">
                <label for="namaLengkap">Nama Lengkap:</label><br>
                <input type="text" id="namaLengkap" name="namaLengkap" required><br><br>
            </div>
            <div class="col-12">
                <label for="tempatLahir">Tempat Lahir:</label><br>
                <input type="text" id="tempatLahir" name="tempatLahir" required><br><br>
            </div>
            <div class="col-12">
                <label for="tanggalLahir">tanggal Lahir:</label><br>
                <input type="date" id="tanggalLahir" name="tanggalLahir" required><br><br>
            </div>
            <div class="col-12">
                <label for="bulan">Bulan Lahir:</label><br>
                <select id="bulan" name="bulan" required>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
                </select>
            </div>
            <div class="col-12">
                <label for="wargaNegara">Warga Negara:</label><br>
                <input type="text" id="wargaNegara" name="wargaNegara" required>
            </div>
            <div class="col-12">
                <label for="kelamin">Jenis Kelamin:</label>
                <input type="radio" id="kelamin1" name="kelamin" value="Laki-laki" required>Laki-laki
                <input type="radio" id="kelamin2" name="kelamin" value="Perempuan" required>Perempuan<br><br>
            </div>
            <div class="col-12">
                <label for="pekerjaan">Pekerjaan:</label><br>
                <input type="text" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="col-12">
                <label for="agama">Agama:</label><br>
                <input type="text" id="agama" name="agama" required>
            </div>
            <div class="col-12">
                <label for="nik">NIK:</label><br>
                <input type="text" id="nik" name="nik" required>
            </div>
            <div class="col-12">
                <label for="nomorKk">Nomor KK:</label><br>
                <input type="text" id="nomorKk" name="nomorKk" required>
            </div>
            <div class="col-12">
                <label for="golonganDarah">Golongan Darah:</label><br>
                <input type="text" id="golonganDarah" name="golonganDarah" required>
            </div>
            <div class="col-12">
                <label for="rt">RT:</label><br>
                <input type="text" id="rt" name="rt" required>
            </div>
            <div class="col-12">
                <label for="rw">RW:</label>
                <input type="text" id="rw" name="rw" required>
            </div>
            <div class="col-12">
                <label for="dusun">Dusun:</label>
                <input type="text" id="dusun" name="dusun" required>
            </div>
            <div class="col-12">
                <label for="desa">Desa:</label>
                <input type="text" id="desa" name="desa" required>
            </div>
            <div class="col-12">
                <label for="kecamatan">Kecamatan:</label>
                <input type="text" id="kecamatan" name="kecamatan" required>
            </div>
            <div class="col-12">
                <label for="kabupaten">Kabupaten:</label>
                <input type="text" id="kabupaten" name="kabupaten" required>
            </div>
            
         
           
            <button class="btn btn-primary" type="submit">Simpan</button>
            
        </form> --}}
        {{-- <form class="row g-3" action="/formsurat" method="post">
            {{ csrf_field() }}
            <div class="col-12">
                <label for="kategori" class="form-label"></label>
                <select class="form-select form-control" id="kategori" name="jenissurat" required>
                    <option value="">Pilih jenis surat</option>
                    @foreach($jenisSurat as $jenis)
                        <option value="{{ $jenis->id }}" {{ old('category_id') == $jenis->id ? 'selected' : '' }}>{{ $jenis->nama_jenis }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="col-12 mt-3">
                <button class="btn btn-primary w-100" type="submit">Buat</button>
            </div>
        </form> --}}

    </section>

@endsection