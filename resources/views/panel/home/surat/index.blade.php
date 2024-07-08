@extends(('panel.layouts.app'))

@section('content')


<section class="section">
    <div class="row">

      <div class="col-lg-12">
        {{-- @include('_message') --}}
        <div class="card">
          <div class="card-body">
            
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Status Riwayat Surat</h5>
                </div>

                 {{-- <div class="col-md-6" style="text-align: right">
                    @if(!empty($PermissionAdd))
                    <a class="btn btn-primary" style="margin-top: 15px" href="{{ url('panel/users/add') }}">Tambah User</a>
                    @endif
                </div> --}}
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Surat</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    {{-- @if(!empty($PermissionEdit) || !empty($PermissionEdit)) --}}
                    <th scope="col">Action</th>
                    {{-- @endif --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat as $s)
                        <tr>
                        <th scope="row">{{  $s->id }}</th>
                        <td>{{ $s->nomor_surat }}</td>
                        <td>{{ $s->jenis_surat }}</td>
                        @if($s->validate == 0 && $s->tanda_tangan == 0)
                            <td>Belum valid dan ttd</td>
                        @elseif($s->validate == 1 && $s->tanda_tangan == 0)
                            <td>Valid tapi belum ttd</td>
                        @elseif($s->validate == 1 && $s->tanda_tangan == 1)
                            <td>sukses</td>
                        @else
                            <td>Eror</td>
                        @endif
                        {{-- <td>{{ $s->validate }}</td> --}}
                        <td>{{ $s->created_at }}</td>
                        <td>
                          {{-- @if(!empty($PermissionEdit)) --}}
                            <a href="" class="btn btn-primary btn-sm">Detail</a>
                          {{-- @endif --}}
                          
                          {{-- @if(!empty($PermissionDelete)) --}}
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                          {{-- @endif --}}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
        </div>

      </div>

    </div>

  </section>


@endsection