<!-- Large Modal -->
<div class="modal fade" id="detail{{ $user->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Update Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-petugas-update', $user->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <!-- @method('POST') -->
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Nama</label>
                            <input type="text" id="dobLarge" name="name" class="form-control"
                                value="{{ $user->name }}" placeholder="Tulis Nama" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Gender</label>
                            <select class="form-select" name="gender" id="select1"
                                aria-label="Default select example">
                                @if ($user->gender == 'L')
                                    <option value="L" selected>Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                @else
                                    <option value="L">Laki-laki</option>
                                    <option value="P" selected>Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="select2" class="form-label">Role</label>
                            <select class="form-select" name="role" id="select2"
                                aria-label="Default select example">
                                @if ($user->role == 'admin')
                                    <option value="admin" selected>Admin</option>
                                    <option value="petugas">Petugas</option>
                                @else
                                    <option value="admin">Admin</option>
                                    <option value="petugas" selected>Petugas</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Email</label>
                            <input type="email" id="dobLarge" name="email" class="form-control"
                                value="{{ $user->email }}" placeholder="Tulis Email" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Password</label>
                            <input type="text" id="dobLarge" name="password" class="form-control"
                                placeholder="Tulis Password" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tulis Ulang Password</label>
                            <input type="text" id="dobLarge" name="password_confirmation" class="form-control"
                                placeholder="Tulis Ulang Password" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" value="ubah" class="btn btn-primary"> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
