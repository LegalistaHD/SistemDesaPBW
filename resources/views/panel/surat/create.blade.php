@extends(('panel.layouts.app'))

@section('content')

    {{-- <section class="section surat text-center">
        <div class="card p-3">
           
        </div>
       
    </section> --}}
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3 col-12">

                <div class="card-body">

                  <div class="pt-4 pb-2 ">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Surat</h5>
                    <p class="text-center small">Pilih jenis surat yang akan dibuat</p>
                  </div>

                  @include('_message')

                <form class="row g-3" action="/formsurat" method="post">
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
                </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

@endsection