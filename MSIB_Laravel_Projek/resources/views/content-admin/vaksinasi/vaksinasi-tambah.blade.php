<div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Vaksinasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-vaksinasiTambah') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">NIK</label>
                            <input type="text" id="dobLarge" name="nik" class="form-control"
                                placeholder="Tulis NIK" />
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Jenis Vaksin</label>
                            <select class="form-select" name="jenis_vaksin" id="select1"
                                aria-label="Default select example">
                                @foreach ($dataVaksin as $dv)
                                    <option value="{{ $dv->id }}">{{ $dv->nama_vaksin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Dosis</label>
                            <select class="form-select" name="dosis" id="dosis"
                                aria-label="Default select example">
                                {{-- <option value="0">Tidak Vaksin</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option> --}}
                            </select>
                        </div>
                    </div>


                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tanggal Vaksin</label>
                            <input type="date" id="dobLarge" name="tgl_vaksin" class="form-control"
                                placeholder="TTTT-BB-HH" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Keterangan</label>
                            <input type="text" id="dobLarge" name="keterangan" class="form-control"
                                placeholder="Tulis Keterangan" />
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
