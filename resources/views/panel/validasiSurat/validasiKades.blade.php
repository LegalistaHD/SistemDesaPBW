@extends('panel.layouts.app')

@section('content')
<section class="section surat">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-title">Status Surat Belum Tervalidasi Kepala Desa</h5>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pengaju</th>
                            <th scope="col">Nomor Surat</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surats as $s)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $s->user->name }}</td>
                                <td>{{ $s->nomor_surat }}</td>
                                <td>{{ $s->jenis_surat }}</td>
                                @switch($s->status)
                                    @case(0)
                                        <td>Pending</td>
                                        @break
                                    @case(1)
                                        <td>Validated by Operator</td>
                                        @break
                                    @case(2)
                                        <td>Validated by Sekretaris Desa</td>
                                        @break
                                    @case(3)
                                        <td>Validated by Kepala Desa</td>
                                        @break
                                    @case(-1)
                                        <td>Ditolak dengan Catatan</td>
                                        @break
                                @endswitch
                                <td>{{ $s->created_at }}</td>
                                <td>
                                    <form action="{{ route('letters.validate.kades', $s->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <input type="file" name="tanda_tangan" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Validasi & Tandatangani</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div>
      <a href="{{ route('surat.tervalidasi') }}">Lihat Surat Tervalidasi</a>
  </div>
</section>
@endsection
