@extends('panel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Settings</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change Current Role</h5>

                        <form action="{{ route('update-current-role', ['id' => auth()->user()->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="role_id" class="form-label">Select Current Role:</label>
                                <select class="form-control" id="role_id" name="role_id" required>
                                    <option value="">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $currentUser->role_id == $role->id ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
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
        <form action="/profile" method="POST">
            @csrf
            
            <label for="namaLengkap">Nama Lengkap:</label><br>
            <input type="text" id="namaLengkap" name="namaLengkap" required><br><br>
        
            <label for="tempatLahir">Tempat Lahir:</label><br>
            <input type="text" id="tempatLahir" name="tempatLahir" required><br><br>
        
            <label for="tanggalLahir">tanggal Lahir:</label><br>
            <input type="date" id="tanggalLahir" name="tanggalLahir" required><br><br>
        
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
            </select><br><br>
        
            {{-- <label for="tahun">Tahun Lahir:</label><br>
            <input type="number" id="tahun" name="tahun" required><br><br> --}}
        
            <label for="wargaNegara">Warga Negara:</label><br>
            <input type="text" id="wargaNegara" name="wargaNegara" required><br><br>
        
            <label for="kelamin">kKelamin:</label><br>
            <input type="radio" id="kelamin1" name="kelamin" value="1" required>Laki-laki
            <input type="radio" id="kelamin2" name="kelamin" value="2" required>Perempuan<br><br>
        
            <label for="pekerjaan">Pekerjaan:</label><br>
            <input type="text" id="pekerjaan" name="pekerjaan" required><br><br>
        
            <label for="agama">Agama:</label><br>
            <input type="text" id="agama" name="agama" required><br><br>
        
            <label for="nik">NIK:</label><br>
            <input type="text" id="nik" name="nik" required><br><br>
        
            <label for="nomorKk">Nomor KK:</label><br>
            <input type="text" id="nomorKk" name="nomorKk" required><br><br>
        
            <label for="keperluan">Keperluan:</label><br>
            <input type="text" id="keperluan" name="keperluan" required><br><br>
        
            <label for="golonganDarah">Golongan Darah:</label><br>
            <input type="text" id="golonganDarah" name="golonganDarah" required><br><br>
        
            <label for="rt">RT:</label><br>
            <input type="text" id="rt" name="rt" required><br><br>
        
            <label for="rw">RW:</label><br>
            <input type="text" id="rw" name="rw" required><br><br>
        
            <label for="dusun">Dusun:</label><br>
            <input type="text" id="dusun" name="dusun" required><br><br>
        
            <label for="desa">Desa:</label><br>
            <input type="text" id="desa" name="desa" required><br><br>
        
            <label for="kecamatan">Kecamatan:</label><br>
            <input type="text" id="kecamatan" name="kecamatan" required><br><br>
        
            <label for="kabupaten">Kabupaten:</label><br>
            <input type="text" id="kabupaten" name="kabupaten" required><br><br>
         
           
            <button class="btn btn-primary" type="submit">Simpan</button>
            
        </form>
    </section>

@endsection
