@extends('content-admin.index')
@section('isi-contentAdmin')
    <div class="card p-3">
        <h5 class="card-header">Data Vaksin</h5>
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
                Data</button>
            {{-- @include('content-admin.vaksinasi.vaksinasi-tambah') --}}
            <div class="table-responsive text-nowrap">
                <table id="datatable1" class="table">
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
                        @foreach ($imp as $d)
                            <tr>
                                <td><strong><?= $loop->iteration ?></strong></td>
                                <td>{{ $d->nama }}</td>
                                <td>{{ $d->jenis_vaksin }}</td>
                                <td>{{ $d->dosis }}</td>
                                <td>{{ $d->tanggal_vaksin }}</td>
                                <td>{{ $d->Ket }}</td>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $d->id }}">
                                            <i class="bx bx-edit-alt me-1"></i>
                                        </button>
                                        {{-- @include('content-admin.vaksinasi.vaksinasi-edit') --}}
                                        &nbsp;
                                        <form method="POST" action="{{-- {{ route('admin-vaksinasiHapus') }} --}}">
                                            <button class="btn btn-sm btn-danger" type="submit" name="proses" value="hapus"
                                                onclick="return confirm('Anda Yakin Data dihapus?')"><i
                                                    class="bx bx-trash me-1"></i> </button>
                                            <input type="hidden" name="idx" value="{{ $d->id }}" />
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
