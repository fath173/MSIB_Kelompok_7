@extends('content-admin.index')
@section('isi-contentAdmin')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/profile/assets/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('assets/profile/assets/img/favicon.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Paper Dashboard 2 by Creative Tim
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        {{-- <link href="{{ asset('assets/profile/assets/css/bootstrap.min.css') }}" rel="stylesheet" /> --}}
        <link href="{{ asset('assets/profile/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        {{-- <link href="{{ asset('assets/profile/assets/demo/demo.css') }}" rel="stylesheet" /> --}}
    </head>

    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="logo">
                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                        <div class="logo-image-small">
                            <img src="{{ asset('assets/profile/assets/img/logo-small.png') }}">
                        </div>
                        <!-- <p>CT</p> -->
                    </a>
                    <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                        Creative Tim
                        <!-- <div class="logo-image-big">
                                                                        <img src="../assets/img/logo-big.png">
                                                                      </div> -->
                    </a>
                </div>
            </div>
            <div class="">
                <div class="content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="{{ asset('assets/profile/assets/img/damir-bosnjak.jpg') }}" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            @if (($data->foto) == '-')
                                            <img class="avatar border-gray" src="{{ asset('files/default-avatar.png') }}"
                                                alt="...">
                                            @else
                                            <img class="avatar border-gray"
                                                src="{{ asset('files/foto-profile/' . $data->foto) }}" alt="...">
                                            @endif
                                            <h5 class="title">{{ $data->name }}</h5>
                                        </a>
                                        <!-- <p class="description">
                                            @Johndoe
                                        </p> -->
                                    </div>
                                    <p class="description text-center">
                                        "I like the way you work it <br>
                                        No diggity <br>
                                        I wanna bag it up"
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h5 class="card-title">Edit Profile</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin-profileUpdate', $data->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Nama"
                                                        value="{{ $data->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Email" value="{{ $data->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-select" name="gender"
                                                        aria-label="Default select example">
                                                        <option selected>Gender</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <p style="color: rgb(144, 144, 144);">Edit foto profile</p>
                                                    <input type="file" class="form-control border-0" name="foto"
                                                        placeholder="Upload gambar" style="height: 55px; color: black"
                                                        accept=".png, .jpg, .jpeg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="update ml-auto mr-auto">
                                                <button type="submit" class="btn btn-primary btn-round">Update
                                                    Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/profile/assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/profile/assets/js/core/popper.min.js') }}."></script>
        <script src="{{ asset('assets/profile/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/profile/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="{{ asset('assets/profile/assets/js/plugins/chartjs.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('assets/profile/assets/js/plugins/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/profile/assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('assets/profile/assets/demo/demo.js') }}"></script>
    </body>

    </html>
@endsection
