@extends('content-landing.index')
@section('isi-contentLanding')
    <!-- Home -->
    <div class="home">
        <div class="home_slider_container">
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background"
                        style="background-image:url({{ asset('assets/landing/images/bg2.jpg') }})">
                    </div>
                    <div class="home_content">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content_inner">
                                        <div class="home_title">
                                            <h1>Vaksin Melindungi Kesehatan Masyarakat</h1>
                                        </div>
                                        <div class="home_text">
                                            <p style="color: black">Setiap orang berhak mendapatkan vaksin berkualitas </p>
                                        </div>
                                        <div class="button home_button">
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background"
                        style="background-image:url({{ asset('assets/landing/images/home_background_1.jpg') }})">
                    </div>
                    <div class="home_content">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content_inner">
                                        <div class="home_title">
                                            <h1>Medicine made with care</h1>
                                        </div>
                                        <div class="home_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                                tempus vestibulum mauris quis aliquam. Integer accumsan sodales
                                                odio, id tempus velit ullamcorper id. Quisque at erat eu.</p>
                                        </div>
                                        <div class="button home_button">
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background"
                        style="background-image:url({{ asset('assets/landing/images/home_background_1.jpg') }})">
                    </div>
                    <div class="home_content">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content_inner">
                                        <div class="home_title">
                                            <h1>Medicine made with care</h1>
                                        </div>
                                        <div class="home_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                                tempus vestibulum mauris quis aliquam. Integer accumsan sodales
                                                odio, id tempus velit ullamcorper id. Quisque at erat eu.</p>
                                        </div>
                                        <div class="button home_button">
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Progress -->
            <div class="home_slider_progress"></div>
        </div>
    </div>

    <!-- 3 Boxes -->

    <div class="boxes">
        <div class="container">
            <div class="row">

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box working_hours">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width:29px; height:29px;"><img
                                    src="{{ asset('assets/landing/images/alarm-clock.svg') }}" alt="">
                            </div>
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
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_appointments">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 29px; height:29px;"><img
                                    src="{{ asset('assets/landing/images/phone-call.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="box_title">Appointments</div>
                        <div class="box_text">Jika ada perencanaan pertemuan pribadi, silakan hubungi Helpdesk berikut :
0895 3768 60088</div>
                    </div>
                </div>

                <!-- Box -->
                <div class="col-lg-4 box_col">
                    <div class="box box_emergency">
                        <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                            <div style="width: 37px; height:37px; margin-left:-4px;"><img
                                    src="{{ asset('assets/landing/images/bell.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="box_title">Emergency Cases</div>
                        {{-- <div class="box_phone">+56 273 45678 235</div> --}}
                        <div class="box_emergency_text" style="text-align: justify">
                            Informasi lebih lanjut hubungi : Contact Center HALO BPOM di nomor telepon 1-500-533,  email halobpom@pom.go.id,  atau Unit Layanan Pengaduan Konsumen (ULPK) Balai Besar/Balai POM di seluruh Indonesia</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- About Content -->
                <div class="col-lg-7">
                    <div class="about_content">
                        <div class="section_title">
                            <h2>Tim medis yang hebat untuk membantu kebutuhan Anda</h2>
                        </div>
                        <div class="about_text">
                            <p style="text-align: justify">Setelah melakukan vaksin, akan dilakukan observasi selama 15 menit. Jika dalam 15 menit tersebut terdapat keluhan, maka akan ditangani oleh tim medis yang bertugas di lokasi vaksinasi. Jika keluhan baru dirasakan ketika anak pulang, maka dapat melaporkan ke puskesmas atau dapat menghubungi kontak yang ada di kartu vaksin.</p>
                        </div>
                        {{-- <div class="button about_button">
                            <a href="#">read more</a>
                        </div> --}}
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-lg-5">
                    <div class="about_image" style="width: 10cm; height:6cm; opacity : 0.8;"><img src="{{ asset('assets/landing/images/medis2.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Departments -->

    <div class="departments">
        <div class="departments_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/landing/images/departments.jpg') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title section_title_light">
                        <h2>Check Your Identity</h2>
                    </div>
                </div>
            </div>
            <div class="row departments_row row-md-eq-height">

                <div class="boxes">
                    <div class="container">
                        <div class="row">
                            <!-- Box -->
                            <div class="col-lg-4 box_col">
                                <a href="{{ route('landing-kk') }}">
                                <div class="box1 box_appointments">
                                    <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                                        <div style="width: 280px; height:280px; margin-top: 130px; margin-left:1px;"><img
                                                src="{{ asset('assets/landing/images/kk.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="box_title" style="margin-top: 140px; margin-left:125px;">No. KK</div>

                                </div>
                                </a>
                            </div>

                            <!-- Box -->
                            <div class="col-lg-4 box_col">
                                <a href="{{ route('landing-nik') }}">
                                <div class="box1 box_appointments">
                                    <div class="box_icon d-flex flex-column align-items-start justify-content-center">
                                        <div style="width: 280px; height:280px; margin-top: 130px; margin-left:1px;"><img
                                                src="{{ asset('assets/landing/images/nik.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="box_title" style="margin-top: 140px; margin-left:125px;">NIK</div>
                                </div>
                                </a>
                            </div>

                            <!-- Box -->
                            <div class="col-lg-4 box_col" style="color: #f4f4f4; margin-top:20px;">
                                <h2>BINGUNG CARI DATA VAKSIN?</h2>
                                <p style="color: #f4f4f4;">Yuk cek data diri kamu disini</p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">
                        <h2>Our Featured Services</h2>
                    </div>
                </div>
            </div>
            <div class="row services_row">

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_1.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">Free Checkups</div>
                            <div class="service_text">
                                <p>Silahkan berkunjung ke layanan kami untuk memeriksa apakah anda sudah bisa melakukan vaksinasi dosis berikutnya.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_2.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">Screening Exams</div>
                            <div class="service_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                    finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_3.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">RMI Services</div>
                            <div class="service_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                    finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_4.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">Dentistry</div>
                            <div class="service_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                    finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_5.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">Neonatology</div>
                            <div class="service_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                    finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Service -->
                <div class="col-lg-4 col-md-6 service_col">
                    <a href="services.html">
                        <div class="service text-center trans_200">
                            <div class="service_icon"><img class="svg')}}"
                                    src="{{ asset('assets/landing/images/service_6.svg') }}" alt="">
                            </div>
                            <div class="service_title trans_200">Biochemistry</div>
                            <div class="service_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo,
                                    finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to action -->

    <div class="cta">
        <div class="cta_background parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('assets/landing/images/cta.jpg') }}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content text-center">
                        <h2>Apakah anda membutuhkan bantuan?</h2>
                        <p>Jika pertanyaan tidak tersedia di FAQ, silakan hubungi Helpdesk berikut :
0895 3768 60088</p>
                        <div class="button cta_button"><a href="#">Ajukan Permohonan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
