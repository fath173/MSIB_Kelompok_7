@extends('content-landing.index')
@push('style-custom')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/styles/about_responsive.css') }}">
@endpush
@section('isi-contentLanding')
    {{-- manggil header landing --}}
    @include('content-landing.header')
    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row">

                <!-- About Content -->
                <div class="col-lg-8">
                    <div class="section_title">
                        <h2>Apa itu VaksinMed??</h2>
                    </div>
                    <div class="about_text">
                        <p style="text-align: justify">VaksinMed merupakan suatu website untuk membantu pendataan vaksin
                            pada masyarakat desa.
                            Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada seluruh tenaga kesahatan,
                            asisten tenaga kesehatan,
                            dan mahasiswa yang menjalankan pendidikan profesi kedokteran yang bekerja pada fasilitas
                            pelayanan kesehatan.
                            Vaksin tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.
                            Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga
                            berhasil menjangkau
                            seluruh warga negara Indonesia dan warga negara asing yang bertempat tinggal di Indonesia.
                            Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas
                            dari penyebaran virus Covid-19.</p>
                    </div>

                </div>

                <!-- Boxes -->
                <div class="col-lg-4 boxes_col">

                    <!-- Box -->
                    <div class="box working_hours">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width:29px; height:29px;"><img
                                    src="{{ asset('assets/landing/images/alarm-clock.svg') }}" alt=""></div>
                        </div>
                        <div class="box_title">Working Hours</div>
                        <div class="working_hours_list">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Monday – Friday</div>
                                    <div class="ml-auto">8.00 – 19.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Saturday</div>
                                    <div class="ml-auto">9.30 – 17.00</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div>Sunday</div>
                                    <div class="ml-auto">9.30 – 15.00</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Box -->
                    <div class="box box_appointments">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 29px; height:29px;"><img
                                    src="{{ asset('assets/landing/images/phone-call.svg') }}" alt=""></div>
                        </div>
                        <div class="box_title">Hotline Covid-19</div>
                        <div class="box_text">Informasi panggilan darurat untuk penannganan Covid-19. Informasi lebih lanjut
                            silahkan hubungi : 119</div>
                    </div>

                    <!-- Box -->
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 37px; height:37px; margin-left:-4px;"><img
                                    src="{{ asset('assets/landing/images/bell.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="box_title">Narahubung</div>
                        <div class="box_emergency_text">Jika ada ingin mengetahui informasi secara lengkap, dapat langsung
                            hubungi : 08214121231</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="cta">
        <div class="cta_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/landing/images/cta.jpg') }}" data-speed="0.8">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center">
                        <h2>Need a personal health plan?</h2>
                        <p>Duis massa massa, mollis vel ullamcorper quis, finibus et urna. Aliquam ac eleifend metus. Ut
                            sollicitudin risus ex</p>
                        <div class="button cta_button"><a href="#">request a plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@push('script-custom')
    <script src="{{ asset('assets/landing/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/landing/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('assets/landing/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('assets/landing/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('assets/landing/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/landing/plugins/progressbar/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/about.js') }}"></script>
@endpush
