<!-- Large Modal -->
<div class="modal fade" id="detail{{ $p->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">{{ $p->nama }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="controller/backend/PendudukCtrl.php" method="POST">
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="nokk" class="form-label">No KK</label>
                            <input type="text" id="nokk" name="no_kk" class="form-control" value="{{ $p->no_kk }}"
                                placeholder="Tulis No KK" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">NIK</label>
                            <input type="text" id="dobLarge" name="nik" class="form-control"
                                value="{{ $p->nik }}" placeholder="Tulis NIK" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Nama Penduduk</label>
                            <input type="text" id="dobLarge" name="nama" class="form-control"
                                value="{{ $p->nama }}" placeholder="Tulis Nama Petugas" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tempat Lahir</label>
                            <input type="text" id="dobLarge" name="tempat_lahir" class="form-control"
                                value="{{ $p->tempat_lahir }}" placeholder="Tulis Tempat Lahir" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tanggal Lahir</label>
                            <input type="text" id="dobLarge" name="tanggal_lahir" class="form-control"
                                value="{{ $p->tanggal_lahir }}" placeholder="Tulis Tanggal Lahir" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Gender</label>
                            <select class="form-select" name="gender" id="select1"
                                aria-label="Default select example">
                                @if ($p->gender == 'L')
                                    <option value="L" selected>Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                @else
                                    <option value="L">Laki-laki</option>
                                    <option value="P" selected>Perempuan</option>
                                @endif
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="select2" class="form-label">Status</label>
                            <select class="form-select" name="status" id="select2"
                                aria-label="Default select example">
                                @if ($p->status == 'kepala keluarga')
                                    <option value="kepala keluarga" selected>Kepala Keluarga</option>
                                    <option value="istri">Istri</option>
                                    <option value="anak">Anak</option>
                                @elseif ($p->status == 'istri')
                                    <option value="kepala keluarga">Kepala Keluarga</option>
                                    <option value="istri" selected>Istri</option>
                                    <option value="anak">Anak</option>
                                @else
                                    <option value="kepala keluarga">Kepala Keluarga</option>
                                    <option value="istri">Istri</option>
                                    <option value="anak" selected>Anak</option>
                                @endif

                            </select>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Alamat</label>
                            <input type="text" id="dobLarge" name="alamat" value="{{ $p->alamat }}"
                                class="form-control" placeholder="Tulis Nama Petugas" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="proses" value="ubah" class="btn btn-primary"> Update </button>
                    <input type="hidden" name="idx" value="{{ $p->id }}">
                </div>
            </form>
        </div>
    </div>
</div>
