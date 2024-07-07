@extends(('panel.layouts.app'))

@section('content')
    {{-- <div class="pagetitle">
      <h1>Dashboard</h1>
    </div> --}}

    <section class="section profile">
        <h1>Nama Lengkap : {{ $data->namaLengkap }}</h1>

        <h2><a href="/profil/{{ $data->id }}">Show</a></h2>
        <h2><a href="/profil/{{ $data->id }}/edit">Edit</a></h2>
    </section>

@endsection