@extends(('panel.layouts.app'))

@section('content')
    {{-- <div class="pagetitle">
      <h1>Surat</h1>
    </div> --}}

    <section class="section surat">
      <div class="row">


              
            {{-- <div class="col-4 shadow-sm rounded">
              <a href="">Pengaduan Surat</a>
            </div> --}}
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
                      <th scope="col">Nama Pengaju</th>
                      <th scope="col">Nomor Surat</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>
                     
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($surats as $s)
                          <tr>
                          <th scope="row">{{  $loop->iteration }}</th>
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
          
                          @endswitch($s->validate == 0 && $s->tanda_tangan == 0)
                              
                          {{-- <td>{{ $s->validate }}</td> --}}
                          <td>{{ $s->created_at }}</td>
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