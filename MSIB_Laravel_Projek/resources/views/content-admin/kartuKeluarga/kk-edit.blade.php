<!-- Large Modal -->
<div class="modal fade" id="detail{{ $p->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{-- {{ route('admin-kk-update',$p->id) }}  --}}" method="POST">
                <div class="modal-body">
                    <div class="row g-2 mb-3">
                        <div class="col mb-0">
                            <label for="nokk" class="form-label">No KK</label>
                            <input type="text" id="nokk" name="no_kk" class="form-control" value="{{ $p->no_kk }}"
                                placeholder="Tulis No KK" />
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
