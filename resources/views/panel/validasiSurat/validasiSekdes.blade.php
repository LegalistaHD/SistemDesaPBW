@extends(('panel.layouts.app'))

@section('content')
    <section class="section surat">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Status Surat Belum Tervalidasi Sekretaris Desa</h5>
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
                                <th scope="col">Nomor Surat</th>
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
                                        <form action="{{ route('letters.validate.sekdes', $s->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-primary">Validasi Sekdes</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('letters.assign.nomor', $s->id) }}" method="POST">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <textarea name="" class="form-control" rows="3">{{ $s->nomor_surat }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-secondary">Nomor Surat</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
