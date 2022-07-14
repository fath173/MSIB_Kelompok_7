@extends('content-admin.index')
@push('style-custom')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Data Vaksin</h5>
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
                Data</button>
            @include('content-admin.vaksinasi.vaksinasi-tambah')
            <div class="table-responsive text-nowrap">
                <table id="vaksinasiTbl" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Vaksin</th>
                            <th>Dosis</th>
                            <th>Tanggal Vaksin</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data_vaksinasi as $d)
                            <tr>
                                <td><strong><?= $loop->iteration ?></strong></td>
                                <td>{{ $d->pendudukFk->nama }}</td>
                                <td>{{ $d->jenisVaksinFk->nama_vaksin }}</td>
                                <td>{{ $d->dosisFk->nama_dosis }}</td>
                                <td>{{ $d->tgl_vaksin }}</td>
                                <td>{{ $d->keterangan }}</td>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $d->id }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </button>
                                        @include('content-admin.vaksinasi.vaksinasi-edit')
                                        &nbsp;
                                        <form method="POST" action="{{ route('admin-vaksinasiHapus', $d->id) }}">
                                            @csrf
                                            <button class="btn btn-sm btn-danger" type="submit" name="proses"
                                                value="hapus" onclick="return confirm('Anda Yakin Data dihapus?')"><i
                                                    class="bx bx-trash me-1"></i>
                                            </button>
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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("input[name~='nik']").keyup(function() {
                var nikk = $(this).val()
                loadJenisVaksin(nikk)
            });

            function loadJenisVaksin(nikk) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin-getJenisVaksin') }}",
                    data: {
                        nik: nikk
                    },
                    success: function(data) {
                        if (data == 0) {
                            document.getElementById("dosis").innerHTML = ''
                            console.log(data);
                        } else {
                            var dataDosis = ''
                            for (const d in data) {
                                dataDosis +=
                                    `<option value="${data[d].id}">${data[d].nama_dosis}</option>`;
                            }
                            document.getElementById("dosis").innerHTML = dataDosis
                            // console.log(dataDosis);
                        }
                    }
                });
            }

            $("#vaksinasiTbl").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                dom: 'Bfrtip',
                buttons: [{
                            extend:'excel',
                            filename: 'vaksinasi',
                            title: 'Data Vaksinasi',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5]
                            },
                          },
                          {
                            extend:'pdf',
                            filename: 'vaksinasi',
                            title: 'Data Vaksinasi',
                            download: 'open',
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
                                var rowCount = doc.content[1].table.body.length;
                                for (i = 1; i < rowCount; i++) {
                                    doc.content[1].table.body[i][0].alignment = 'center';
                                    doc.content[1].table.body[i][3].alignment = 'center';
                                    doc.content[1].table.body[i][4].alignment = 'center';
                                };
                            }
                          },
                          "colvis"
                ],
            })
        });
    </script>
@endpush
