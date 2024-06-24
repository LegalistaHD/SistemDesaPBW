@extends(('panel.layouts.app'))

@section('content')

<div class="pagetitle">
    <h1>Disposisi Surat</h1>
  </div>

  <section class="section">
    <div class="row">

      <div class="col-lg-12">
        @include('_message')
        <div class="card">
          <div class="card-body">
            
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Disposisi Surat List</h5>
                </div>

                 <div class="col-md-6" style="text-align: right">
                    @if(!empty($PermissionAdd))
                    <a class="btn btn-primary" style="margin-top: 15px" href="{{ url('panel/disposisiSurat/add') }}">Tambah Disposisi Surat</a>
                    @endif
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Judul Surat</th>
                    <th scope="col">Nama File</th>
                    <th scope="col">Catatan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date</th>
                    @if(!empty($PermissionEdit) || !empty($PermissionEdit))
                    <th scope="col">Action</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $disposisiSurat as $value )
                        <tr>
                        <td>{{ $value->suratEksternal->judul_surat }}</td>
                        <td>
                          <a href="{{ url('panel/suratEksternal/showSurat/' .$value->suratEksternal->id) }}" target="_blank">{{ $value->suratEksternal->file_name }}</a>
                        </td>
                        <td>{{ $value->catatan }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td>
                          @if(!empty($PermissionEdit))
                            <a href="{{ url('panel/disposisiSurat/edit/' .$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                          @endif
                          
                          @if(!empty($PermissionDelete))
                            <a href="{{ url('panel/disposisiSurat/delete/' .$value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                          @endif
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
@endsection">