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

      <script>
              document.addEventListener('DOMContentLoaded', function () {
                // Get the date of birth from profile data (assuming it's already in ISO format)
                const tanggalLahir = '{{ $profil->tanggalLahir ?? '' }}'; // Ensure tanggalLahir is in ISO format

                // Get the age input element
                const ageInput = document.getElementById('umur');

                // Function to calculate age
                function calculateAge(birthDate) {
                    const today = new Date();
                    const birthDateObj = new Date(birthDate);
                    let age = today.getFullYear() - birthDateObj.getFullYear();
                    const monthDiff = today.getMonth() - birthDateObj.getMonth();
                    
                    // If the birth month is greater than the current month or 
                    // the birth day is greater than the current day, subtract one year from age
                    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDateObj.getDate())) {
                        age--;
                    }
                    return age;
                }

                // Function to initialize age calculation
                function initializeAgeCalculation() {
                    if (tanggalLahir) {
                        const age = calculateAge(tanggalLahir);
                        ageInput.value = age;
                    } else {
                        ageInput.value = '';
                    }
                }

                // Trigger age calculation on page load
                initializeAgeCalculation();
            });


        
            document.addEventListener('DOMContentLoaded', function () {
            // Function to update address field
            function updateAddress(profile) {
                const alamat = `Dusun ${profile.dusun}, Desa ${profile.desa}, Kecamatan ${profile.kecamatan}, Kabupaten ${profile.kabupaten}`;
                document.getElementById('alamat').value = alamat;
            }

            // Assuming profile data is passed as a JavaScript object
            const profile = @json($profil);

            // Update address on page load
            updateAddress(profile);
        });

      </script>
