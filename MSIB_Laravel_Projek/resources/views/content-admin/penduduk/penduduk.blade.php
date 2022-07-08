@extends('content-admin.index')
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Data Vaksin</h5>
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
                Data</button>
            @include('content-admin.penduduk.penduduk-tambah')
            <div class="table-responsive text-nowrap">
                <table id="pendudukTbl" class="table">
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
                            title: 'Data Penduduk',
                            // download: 'open',
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
                                var rowCount = doc.content[1].table.body.length;
                                for (i = 1; i < rowCount; i++) {
                                    doc.content[1].table.body[i][0].alignment = 'center';
                                    doc.content[1].table.body[i][1].alignment = 'center';
                                    doc.content[1].table.body[i][2].alignment = 'center';
                                    doc.content[1].table.body[i][5].alignment = 'center';
                                };
                            }
                          },
                          "colvis"
                ],
            })
        });
    </script>
@endpush