@extends('content-admin.index')
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Data Vaksin</h5>
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
                Data</button>
            @include('content-admin.penduduk.penduduk-tambah')
            <div class="table-responsive text-nowrap">
                <table id="datatable_penduduk" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>gender</th>
                            <th>TTL</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($penduduk as $p)
                            <tr>
                                <td><strong><?= $loop->iteration ?></strong></td>
                                <td>{{ $p->kartuKeluargaFk->no_kk }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td>{{ $p->tempat_lahir . ', ' . $p->tanggal_lahir }}</td>
                                <td>{{ $p->status }}
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $p->id }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </button>
                                        @include('content-admin.penduduk.penduduk-edit')
                                        &nbsp;
                                        <form method="POST" action="{{ route('admin-pendudukHapus', $p->id) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit" name="proses"
                                                value="hapus" onclick="return confirm('Anda Yakin Data dihapus?')"><i
                                                    class="bx bx-trash me-1"></i> </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
@push('script-custom')
    <script>
        $(document).ready(function() {
            $("#pendudukTbl").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        orientation: 'potrait',
                        pageSize: 'Legal',
                        title: 'Data Penduduk',
                        download: 'open',
                    },
                    "excel", "print", "colvis"
                ],
                columnDefs: [{
                    "searchable": false,
                    "orderable": false,
                    "targets": 7,
                }]
            })
            // }).buttons().container().appendTo('#datatable1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
