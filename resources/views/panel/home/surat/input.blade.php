@extends(('panel.layouts.app'))

@section('content')





      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2 mb-5">
                    <h5 class="card-title text-center pb-0 fs-4">{{$jenisSurat->nama_jenis }}</h5>
                    <p class="text-center small">Input form dibawah untuk membuat surat!</p>
                   
                  </div>
                  <hr>
                  @include('_message')

                <form class="row g-3" action="/submitsurat" method="post">
                    {{ csrf_field() }}
                    
                        @foreach($inputFormSurat as $input)
                            <div class="col-12">
                                    <label class="mb-2 fw-bold fs-7" for="{{ $input->field }}">{{ ucfirst($input->nama) }}</label>
                                    @php
                                        $value = old($input->field, optional($profil)->{$input->field});

                                        // Check if the input type is date and format the value accordingly
                                        if ($input->type == 'date' && $value) {
                                            $value = \Carbon\Carbon::parse($value)->format('Y-m-d');
                                        }
                                    @endphp
                                    <input type="{{ $input->type }}" 
                                        class="form-control {{ $value ? 'has-value' : '' }}" 
                                        id="{{ $input->field }}" 
                                        name="{{ $input->field }}"  
                                        value="{{ $value }}" 
                                         required>
                                  </div>
                        @endforeach
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="jenis_surat" value="{{$inputFormSurat->first()->jenis_surat_id }}">
                        {{-- @foreach($inputFormSurat as $input)
                            <label for="{{ $input->field }}">{{ ucfirst($input->field) }}</label>
                            <input type="{{ $input->type }}" 
                                class="form-control {{ old($input->field, optional($profil)->{$input->field}) ? 'has-value' : '' }}" 
                                id="{{ $input->field }}" 
                                name="{{ $input->field }}"  
                                value="{{ old($input->field, optional($profil)->{$input->field}) }}" 
                                placeholder="{{ $input->field }}" required>
                        @endforeach --}}
                    
                    
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