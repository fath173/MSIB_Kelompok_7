@extends('content-admin.index')
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Data Kartu Keluarga</h5>
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table id="kkTbl" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Kartu Keluarga</th>
                            <th>Anggota Keluarga</th>
                            <th>Foto KK</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($dataKK as $p)
                            <tr>
                                <td><strong><?= $loop->iteration ?></strong></td>
                                <td>{{ $p->no_kk }}</td>
                                <td>{{ $p->pendudukFk->count() }} Orang</td>
                                <td>
                                    <img src="{{ asset('files/foto-kk/' . $p->foto_kk) }}" width="100px" alt="">
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $p->id }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </button>
                                        @include('content-admin.kartuKeluarga.kk-edit')
                                        &nbsp;
                                        <form method="POST" action="{{ route('admin-kkHapus', $p->id) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Anda Yakin Data dihapus?')"><i
                                                    class="bx bx-trash me-1"></i> </button>
                                            <input type="hidden" name="idx" value="{{ $p->id }}" />
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
            $("#kkTbl").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [{
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
                            title: 'Data Kartu Keluarga',
                            download: 'open',
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
                                var rowCount = doc.content[1].table.body.length;
                                for (i = 1; i < rowCount; i++) {
                                    doc.content[1].table.body[i][0].alignment = 'center';
                                    doc.content[1].table.body[i][1].alignment = 'center';
                                    doc.content[1].table.body[i][2].alignment = 'center';
                                };
                            }
                          },
                          "colvis"
                ],
            })
        });
    </script>
@endpush