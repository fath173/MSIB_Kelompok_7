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
                            @elseif ($message = Session::get('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yeeaay',
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
    <script>
        $(function() {
            $("#datatable_petugas").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                                extend:'excel',
                                filename: 'Petugas',
                                title: 'data petugas',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                },
                            },
                            {
                                extend:'pdf',
                                filename: 'Petugas',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4]
                                },
                                customize: function(doc) {
                                    doc.pageMargins = [25, 70, 25, 30];
                                    doc.content[1].table.widths = [
                                        '5%',
                                        '30%',
                                        '20%',
                                        '15%',
                                        '30%'
                                    ];
                                    doc['header'] = (function() {
                                        return {
                                            columns: [{
                                                    alignment: 'left',
                                                    text: 'Petugas',
                                                    fontSize: 15,
                                                    margin: [10, 15]
                                                },
                                                {
                                                    alignment: 'right',
                                                    fontSize: 14,
                                                    text: 'Laporan',
                                                    margin: [10, 15]
                                                }
                                            ],
                                            margin: 20
                                        }
                                    });
                                    var rowCount = doc.content[1].table.body.length;
                                    for (i = 1; i < rowCount; i++) {
                                        doc.content[1].table.body[i][0].alignment = 'center';
                                    };
                                    doc.content.splice(0, 1);
                                    var objLayout = {};
                                    objLayout['hLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['vLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['hLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['vLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['paddingLeft'] = function() {
                                        return 4;
                                    };
                                    objLayout['paddingRight'] = function() {
                                        return 4;
                                    };
                                    doc.content[0].layout = objLayout;
                                }
                            },
                            "colvis"]
            }).buttons().container().appendTo('#datatable_petugas_wrapper .col-md-6:eq(0)');
            $("#datatable_jenisVaksin").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                                extend:'excel',
                                filename: 'jenis_vaksin',
                                title: 'data jenis vaksin',
                                exportOptions: {
                                    columns: [0, 1]
                                },
                            },
                            {
                                extend:'pdf',
                                filename: 'jenis_vaksin',
                                exportOptions: {
                                    columns: [0, 1]
                                },
                                customize: function(doc) {
                                    doc.pageMargins = [25, 70, 25, 30];
                                    doc.content[1].table.widths = [
                                        '10%',
                                        '90%'
                                    ];
                                    doc['header'] = (function() {
                                        return {
                                            columns: [{
                                                    alignment: 'left',
                                                    text: 'Jenis Vaksin',
                                                    fontSize: 15,
                                                    margin: [10, 15]
                                                },
                                                {
                                                    alignment: 'right',
                                                    fontSize: 14,
                                                    text: 'Laporan',
                                                    margin: [10, 15]
                                                }
                                            ],
                                            margin: 20
                                        }
                                    });
                                    var rowCount = doc.content[1].table.body.length;
                                    for (i = 1; i < rowCount; i++) {
                                        doc.content[1].table.body[i][0].alignment = 'center';
                                    };
                                    doc.content.splice(0, 1);
                                    var objLayout = {};
                                    objLayout['hLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['vLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['hLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['vLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['paddingLeft'] = function() {
                                        return 4;
                                    };
                                    objLayout['paddingRight'] = function() {
                                        return 4;
                                    };
                                    doc.content[0].layout = objLayout;
                                }
                            },
                            "colvis"]
            }).buttons().container().appendTo('#datatable_jenisVaksin_wrapper .col-md-6:eq(0)');
            $("#datatable_penduduk").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                                extend:'excel',
                                filename: 'penduduk',
                                title: 'data penduduk',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6]
                                },
                            },
                            {
                                extend:'pdf',
                                filename: 'penduduk',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5, 6]
                                },
                                customize: function(doc) {
                                    doc.pageMargins = [25, 70, 25, 30];
                                    doc.content[1].table.widths = [
                                        '4%',
                                        '18%',
                                        '18%',
                                        '19%',
                                        '11%',
                                        '15%',
                                        '15%'
                                    ];
                                    doc['header'] = (function() {
                                        return {
                                            columns: [{
                                                    alignment: 'left',
                                                    text: 'Penduduk',
                                                    fontSize: 15,
                                                    margin: [10, 15]
                                                },
                                                {
                                                    alignment: 'right',
                                                    fontSize: 14,
                                                    text: 'Laporan',
                                                    margin: [10, 15]
                                                }
                                            ],
                                            margin: 20
                                        }
                                    });
                                    var rowCount = doc.content[1].table.body.length;
                                    for (i = 1; i < rowCount; i++) {
                                        doc.content[1].table.body[i][0].alignment = 'center';
                                        doc.content[1].table.body[i][1].alignment = 'center';
                                        doc.content[1].table.body[i][2].alignment = 'center';
                                        doc.content[1].table.body[i][5].alignment = 'center';
                                    };
                                    doc.content.splice(0, 1);
                                    var objLayout = {};
                                    objLayout['hLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['vLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['hLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['vLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['paddingLeft'] = function() {
                                        return 4;
                                    };
                                    objLayout['paddingRight'] = function() {
                                        return 4;
                                    };
                                    doc.content[0].layout = objLayout;
                                }
                            },
                            "colvis"]
            }).buttons().container().appendTo('#datatable_penduduk_wrapper .col-md-6:eq(0)');
            $("#datatable_kk").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                                extend:'excel',
                                filename: 'kartu_keluarga',
                                title: 'data kartu keluarga',
                                exportOptions: {
                                    columns: [0, 1, 2]
                                },
                            },
                            {
                                extend:'pdf',
                                filename: 'kartu_keluarga',
                                exportOptions: {
                                    columns: [0, 1, 2]
                                },
                                customize: function(doc) {
                                    doc.pageMargins = [25, 70, 25, 30];
                                    doc.content[1].table.widths = [
                                        '5%',
                                        '48%',
                                        '47%'
                                    ];
                                    doc['header'] = (function() {
                                        return {
                                            columns: [{
                                                    alignment: 'left',
                                                    text: 'Kartu Keluarga',
                                                    fontSize: 15,
                                                    margin: [10, 15]
                                                },
                                                {
                                                    alignment: 'right',
                                                    fontSize: 14,
                                                    text: 'Laporan',
                                                    margin: [10, 15]
                                                }
                                            ],
                                            margin: 20
                                        }
                                    });
                                    var rowCount = doc.content[1].table.body.length;
                                    for (i = 1; i < rowCount; i++) {
                                        doc.content[1].table.body[i][0].alignment = 'center';
                                        doc.content[1].table.body[i][1].alignment = 'center';
                                        doc.content[1].table.body[i][2].alignment = 'center';
                                    };
                                    doc.content.splice(0, 1);
                                    var objLayout = {};
                                    objLayout['hLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['vLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['hLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['vLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['paddingLeft'] = function() {
                                        return 4;
                                    };
                                    objLayout['paddingRight'] = function() {
                                        return 4;
                                    };
                                    doc.content[0].layout = objLayout;
                                }
                            },
                            "colvis"]
            }).buttons().container().appendTo('#datatable_kk_wrapper .col-md-6:eq(0)');
            $("#datatable_vaksinasi").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                                extend:'excel',
                                filename: 'vaksinasi',
                                title: 'data vaksinasi',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5]
                                },
                            },
                            {
                                extend:'pdf',
                                filename: 'vaksinasi',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5]
                                },
                                customize: function(doc) {
                                    doc.pageMargins = [25, 70, 25, 30];
                                    doc.content[1].table.widths = [
                                        '5%',
                                        '20%',
                                        '20%',
                                        '10%',
                                        '20%',
                                        '25%'
                                    ];
                                    doc['header'] = (function() {
                                        return {
                                            columns: [{
                                                    alignment: 'left',
                                                    text: 'Vaksinasi',
                                                    fontSize: 15,
                                                    margin: [10, 15]
                                                },
                                                {
                                                    alignment: 'right',
                                                    fontSize: 14,
                                                    text: 'Laporan',
                                                    margin: [10, 15]
                                                }
                                            ],
                                            margin: 20
                                        }
                                    });
                                    var rowCount = doc.content[1].table.body.length;
                                    for (i = 1; i < rowCount; i++) {
                                        doc.content[1].table.body[i][0].alignment = 'center';
                                        doc.content[1].table.body[i][3].alignment = 'center';
                                        doc.content[1].table.body[i][4].alignment = 'center';
                                    };
                                    doc.content.splice(0, 1);
                                    var objLayout = {};
                                    objLayout['hLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['vLineWidth'] = function() {
                                        return .5;
                                    };
                                    objLayout['hLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['vLineColor'] = function() {
                                        return '#aaa';
                                    };
                                    objLayout['paddingLeft'] = function() {
                                        return 4;
                                    };
                                    objLayout['paddingRight'] = function() {
                                        return 4;
                                    };
                                    doc.content[0].layout = objLayout;
                                }
                            },
                            "colvis"]
            }).buttons().container().appendTo('#datatable_vaksinasi_wrapper .col-md-6:eq(0)');
        });
    </script>

</body>

</html>
