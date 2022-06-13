@extends('content-admin.index')
@section('isi-contentAdmin')
<div class="card p-3">
    <h5 class="card-header">Jenis Vaksin</h5>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
            Data</button>
        @include('content-admin.jenisVaksin.tambah')
        <div class="table-responsive text-nowrap">
            <table id="datatable1" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($jenis_vaksin as $jv)
                    <tr>
                        <td><strong><?= $loop->iteration ?></strong></td>
                        <td>{{ $jv->nama }}</td>
                        </td>
                        <td>
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                    data-bs-target="#detail{{ $jv->id }}">
                                    <i class="bx bx-edit-alt me-1"></i>
                                </button>
                                @include('content-admin.jenisVaksin.edit')
                                &nbsp;
                                <form method="POST" action="{{ route('admin-jenis-vaksin-hapus',$jv->id) }}">
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit" value="hapus"
                                        onclick="return confirm('Anda Yakin Data dihapus?')"><i
                                            class="bx bx-trash me-1"></i> </button>
                                    <!-- <input type="hidden" name="idx" value="{{ $jv->id }}" /> -->
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