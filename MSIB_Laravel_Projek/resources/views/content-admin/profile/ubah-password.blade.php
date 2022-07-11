<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-updatePassword', $data->id) }}" method="POST">
                @csrf

                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Password Lama</label>
                            <input type="password" id="dobLarge" name="password_old" class="form-control"
                                placeholder="Tulis Password" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Password</label>
                            <input type="password" id="dobLarge" name="password" class="form-control"
                                placeholder="Tulis Password" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tulis Ulang Password </label>
                            <input type="password" id="dobLarge" name="password_confirmation" class="form-control"
                                placeholder="Tulis Ulang Password" />
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
