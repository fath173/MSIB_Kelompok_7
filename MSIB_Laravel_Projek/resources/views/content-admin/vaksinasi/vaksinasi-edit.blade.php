<!-- Large Modal -->
<div class="modal fade" id="detail{{ $d->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">{{ $d->nama }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST">
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="#" class="form-control" value="{{ $d->nama }}"
                                placeholder="Tambahkan Nama" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Jenis Vaksin</label>
                            <input type="text" id="dobLarge" name="#" class="form-control" value="{{ $d->jenis_vaksin }}"
                                placeholder="Jenis Vaksin" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Dosis</label>
                            <input type="text" id="dobLarge" name="#" class="form-control" value="{{ $d->dosis }}"
                                placeholder="Dosis" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tanggal Vaksin</label>
                            <input type="text" id="dobLarge" name="#" class="form-control" value="{{ $d->tanggal_vaksin }}"
                                placeholder="TT-BB-HH" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Keterangan</label>
                            <input type="text" id="dobLarge" name="#" class="form-control" value="{{ $d->Ket }}"
                                placeholder="Tambahkan Keterangan" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="proses" value="ubah" class="btn btn-primary"> Update </button>
                    <input type="hidden" name="idx" value="{{ $d->id }}">
                </div>
            </form>
        </div>
    </div>
</div>
