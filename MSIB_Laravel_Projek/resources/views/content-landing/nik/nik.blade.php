@extends('content-landing.index')
@push('style-custom')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/about_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/services_responsive.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush
@section('isi-contentLanding')
    {{-- manggil header landing --}}
    @include('content-landing.header')
    <div class="about">
        <div class="container">
            <div class="row">
                <!-- KK Content -->
                <div class="col-lg-12 py-5" style="margin-top: 10%">
                    <div class="page-section banner-seo-check">
                        <div class="wrap bg-image" style="background-color:rgb(224, 224, 229);">
                            <div class="container text-center">
                                <div class="row justify-content-center wow fadeInUp">
                                    <div class="col-lg-8 py-5">
                                        <h1 class="mb-4" style=" font-weight : bold; color:rgb(19, 64, 75)">Cari No. NIK
                                        </h1>
                                        <input type="text" class="form-control" name="nik" placeholder="12345678">
                                        <button type="button" id="btn-check" class="btn btn-success"
                                            style="margin-top: 10px; cursor:pointer;">
                                            Check Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="features_container d-flex justify-content-center">
                            <!-- Feature -->
                            <div class="feature" style="width: 100%">
                                <div class="feature_content">
                                    <div class="section_title">
                                        <h2>Data</h2>
                                    </div>
                                    <div class="feature_text" id="tabel-data">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-custom')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            $("#btn-check").on('click', function() {
                var nik = $("input[name~='nik']").val()
                // alert('berhasil:' + dat);
                loadData(nik)
            });

            function loadData(nik) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('landing-getByNik') }}",
                    data: {
                        nik: nik
                    },
                    success: function(data) {
                        if (data == 0) {
                            document.getElementById("dosis").innerHTML = ''
                            console.log(data);
                        } else {
                            // var dataDosis = ''
                            // for (const d in data) {
                            //     dataDosis +=
                            //         `<option value="${data[d].id}">${data[d].id}</option>`;
                            // }
                            // document.getElementById("dosis").innerHTML = dataDosis
                            console.log(data[0]);
                        }
                    }
                });
            }
        });
    </script>
@endpush
