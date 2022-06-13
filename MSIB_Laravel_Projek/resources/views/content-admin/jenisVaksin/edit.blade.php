<!-- Large Modal -->
<div class="modal fade" id="detail{{ $jv->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Update Jenis Vaksin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-jenis-vaksin-update',$jv->id) }}" method="POST">
                @csrf
                <!-- @method('POST') -->
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="dobLarge" class="form-label">Nama</label>
                            <input type="text" id="dobLarge" name="nama" class="form-control" value="{{ $jv->nama }}"
                                placeholder="Tulis Nama Petugas" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" value="ubah" class="btn btn-primary"> Update </button>
                    <!-- <input type="hidden" name="idx" value="{{ $jv->id }}"> -->
                </div>
            </form>
        </div>
    </div>
</div>