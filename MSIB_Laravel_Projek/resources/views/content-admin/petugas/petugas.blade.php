@extends('content-admin.index')
@section('isi-contentAdmin')
<div class="card p-3">
    <h5 class="card-header">Petugas</h5>
    <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah
            Data</button>
        @include('content-admin.petugas.tambah')
        <div class="table-responsive text-nowrap">
            <table id="datatable1" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($petugas as $user)
                    <tr>
                        <td><strong><?= $loop->iteration ?></strong></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <img src="{{ asset('files/foto-profile/' . $user->foto) }}" width="50" alt="foto">
                        </td>
                        <!-- <td>{{ asset('files/foto-profile/' . $user->foto) }}</td> -->
                        </td>
                        <td>
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detail{{ $user->id }}">
                                    <i class="bx bx-edit-alt me-1"></i>
                                </button>
                                @include('content-admin.petugas.edit')
                                &nbsp;
                                <form method="POST" action="{{ route('admin-petugas-hapus',$user->id) }}">
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit" value="hapus" onclick="return confirm('Anda Yakin Data dihapus?')"><i class="bx bx-trash me-1"></i> </button>
                                    <!-- <input type="hidden" name="idx" value="{{ $user->id }}" /> -->
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