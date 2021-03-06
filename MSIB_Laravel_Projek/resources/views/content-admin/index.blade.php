<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>

    <meta name="description" content="" />

    @include('layouts.layout-admin.css')
    @stack('style-custom')
    <style>
        .swal2-container {
            z-index: 1100;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <!-- Navbar -->
            @include('layouts.layout-admin.sidebar')
            @include('layouts.layout-admin.navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-12 order-1">
                            @if ($errors->any())
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: '@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach',
                                })
                            </script>
                            @elseif ($message = Session::get('error'))
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    html: '{{ $message }}',
                                })
                            </script>
                            @elseif ($message = Session::get('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    html: '{{ $message }}',
                                })
                            </script>
                            @elseif ($message = Session::get('warning'))
                            <script>
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning!',
                                    html: '{{ $message }}',
                                })
                            </script>
                            @endif

                            @yield('isi-contentAdmin')
                            {{ isset($slot) ? $slot : null }}

                        </div>
                    </div>

                </div>
                <!-- / Content -->


                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('layouts.layout-admin.js')
    @stack('script-custom')


</body>

</html>
