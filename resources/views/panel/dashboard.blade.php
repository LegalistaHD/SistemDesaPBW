@extends(('panel.layouts.app'))

@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div>

    <section class="section dashboard">
      @if(session('success'))
      <p class="alert alert-success">{{ session('success') }}</p>
      @endif
    </section>

@endsection