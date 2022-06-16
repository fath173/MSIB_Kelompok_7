<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-petugas-tambah') }}" method="POST">
                @csrf

                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Nama</label>
                            <input type="text" id="dobLarge" name="name" class="form-control" placeholder="Tulis Nama" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Gender</label>
                            <select class="form-select" name="gender" id="select1" aria-label="Default select example">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="select2" class="form-label">Role</label>
                            <select class="form-select" name="role" id="select2" aria-label="Default select example">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Email</label>
                            <input type="text" id="dobLarge" name="email" class="form-control" placeholder="Tulis Email" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Password</label>
                            <input type="password" id="dobLarge" name="password" class="form-control" placeholder="Tulis Password" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tulis Ulang Password </label>
                            <input type="password" id="dobLarge" name="password_confirmation" class="form-control" placeholder="Tulis Ulang Password" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="proses" value="tambah" class="btn btn-primary"> Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div>