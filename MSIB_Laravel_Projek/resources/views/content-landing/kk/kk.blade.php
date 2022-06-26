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
                <div class="col-lg-12 py-5" style="margin-top: 5%">
                    <div class="page-section banner-seo-check">
                        <div class="wrap bg-image" style="background-color:rgb(224, 224, 229);">
                            <div class="container text-center">
                                <div class="row justify-content-center wow fadeInUp">
                                    <div class="col-lg-8 py-5">
                                        <h1 class="mb-4" style=" font-weight : bold; color:rgb(19, 64, 75)">Cari No. KK
                                        </h1>
                                        <input type="text" class="form-control" name="kk" placeholder="12345678">
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
                                                <tr id="tabelJudul">
                                                    <!-- tag th nya ga ditulis gapapa -->
                                                </tr>
                                            </thead>
                                            <tbody id="tabelData">
                                                <!-- tag tr td nya cukup ditulis di script -->
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

            // On Enter
            $("input[name~='kk']").on('keypress', function(e) {
                var kk = $(this).val();
                if (e.which == 13) {
                    loadData(kk)
                }
            });

            // On button check click
            $("#btn-check").on('click', function() {
                var kk = $("input[name~='kk']").val()
                // alert('berhasil:' + dat);
                loadData(kk)
            });

            function loadData(no_kk) {

                $.ajax({
                    type: "POST",
                    url: "{{ route('landing-getByKK') }}",
                    data: {
                        kk: no_kk
                    },
                    success: function(data) {
                        if (data == 0) {
                            document.getElementById('tabelJudul').innerHTML = 'Tidak Ada Data!'
                            document.getElementById("tabelData").innerHTML = ''
                            console.log(data);
                        } else {
                            let judul = ['No', 'Nama', 'Jenis Vaksin', 'Dosis',
                                'Tanggal Vaksin', 'Keterangan'
                            ];
                            let dataJudul = ''
                            for (const j of judul) {
                                dataJudul = dataJudul + `<th scope="col">${j}</th>`
                            }
                            document.getElementById('tabelJudul').innerHTML = dataJudul

                            var dataVaksin = ''
                            var no = 1;
                            for (const d in data) {
                                dataVaksin += `<tr>
                                                    <th scope="row">${no++}</th>
                                                    <td>${data[d].nama}</td>
                                                    <td>${data[d].jenis_vaksin}</td>
                                                    <td>${data[d].dosis}</td>
                                                    <td>${data[d].tanggal}</td>
                                                    <td>${data[d].keterangan}</td>
                                               </tr>`
                            }
                            document.getElementById("tabelData").innerHTML = dataVaksin
                            // console.log(dataVaksin);
                        }
                    }
                });
            }
        });
    </script>
@endpush
