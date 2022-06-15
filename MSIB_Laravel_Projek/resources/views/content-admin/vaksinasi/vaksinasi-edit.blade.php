<!-- Large Modal -->
<div class="modal fade" id="detail{{ $d->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">{{ $d->pendudukFk->nama }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-vaksinasiUpdate', $d->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">NIK</label>
                            @if (Auth::user()->role == 'admin')
                                <input type="text" id="dobLarge" name="nik" class="form-control"
                                    value="{{ $d->pendudukFk->nik }}" placeholder="Tulis NIK" />
                            @else
                                <input type="hidden" name="nik" value="{{ $d->pendudukFk->nik }}">
                                <input type="text" id="dobLarge" class="form-control"
                                    value="{{ $d->pendudukFk->nik }}" placeholder="Tulis NIK" disabled />
                            @endif

                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Jenis Vaksin</label>
                            <select class="form-select" name="jenis_vaksin" id="select1"
                                aria-label="Default select example">
                                @foreach ($dataVaksin as $dv)
                                    @if ($d->id_vaksin == $dv->id)
                                        <option value="{{ $dv->id }}" selected>{{ $dv->nama_vaksin }}</option>
                                    @else
                                        <option value="{{ $dv->id }}">{{ $dv->nama_vaksin }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="select1" class="form-label">Dosis</label>
                            <select class="form-select" name="dosis" id="select1"
                                aria-label="Default select example">
                                @if ($d->dosis == '0')
                                    <option value="0" selected>Tidak Vaksin</option>
                                @else
                                    <option value="{{ $d->dosis }}" selected>{{ $d->dosis }}</option>
                                @endif
                                <option value="0">Tidak Vaksin</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>


                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Tanggal Vaksin</label>
                            <input type="date" id="dobLarge" name="tgl_vaksin" class="form-control"
                                value="{{ $d->tgl_vaksin }}" placeholder="TTTT-BB-HH" />
                        </div>
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Keterangan</label>
                            <input type="text" id="dobLarge" name="keterangan" class="form-control"
                                value="{{ $d->keterangan }}" placeholder="Tulis Keterangan" />
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
