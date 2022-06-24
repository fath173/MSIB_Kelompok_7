<!-- Large Modal -->
<div class="modal fade" id="detail{{ $p->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin-kkUpdate', $p->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="nokk" class="form-label">No KK</label>
                            <input type="text" id="nokk" name="no_kk" class="form-control"
                                value="{{ $p->no_kk }}" placeholder="Tulis No KK" />
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="nokk" class="form-label">No KK</label>
                            <input type="file" class="form-control border-0" name="foto"
                                placeholder="Upload gambar" style="height: 55px; color: black"
                                accept=".png, .jpg, .jpeg">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary"> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>
