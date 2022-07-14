@extends('content-admin.index')
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Jenis Vaksin</h5>
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
                Data</button>
            @include('content-admin.dosis.tambah')
            <div class="table-responsive text-nowrap">
                <table id="dosisTbl" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($dosis as $d)
                            <tr>
                                <td><strong><?= $loop->iteration ?></strong></td>
                                <td>{{ $d->nama_dosis }}</td>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $d->id }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </button>
                                        @include('content-admin.dosis.edit')
                                        &nbsp;
                                        <form method="POST" action="{{ route('admin-dosis-hapus', $d->id) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit" value="hapus"
                                                onclick="return confirm('Anda Yakin Data dihapus?')"><i
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
            $("#dosisTbl").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        filename: 'dosis',
                        title: 'data Dosis',
                        exportOptions: {
                            columns: [0, 1]
                        },
                    },
                    {
                        extend: 'pdf',
                        filename: 'dosis',
                        title: 'Data Dosis',
                        download: 'open',
                        exportOptions: {
                            columns: [0, 1]
                        },
                        customize: function(doc) {
                            doc.pageMargins = [25, 70, 25, 30];
                            doc.content[1].table.widths = [
                                '10%',
                                '90%'
                            ];
                            var rowCount = doc.content[1].table.body.length;
                            for (i = 1; i < rowCount; i++) {
                                doc.content[1].table.body[i][0].alignment = 'center';
                            };
                        }
                    },
                    "colvis"
                ],
            })
        });
    </script>
@endpush
