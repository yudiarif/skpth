<form action="{{ route('kriteria.destroy', $datakriteria->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="ModalDelete{{$datakriteria->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Kriteria</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">Apakah anda yakin untuk menghapus kriteria <b>{{$datakriteria->nama_kriteria}}</b> ?</div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <span class="icon text-white-50">
                            <i class="fas fa-times"></i>
                        </span>
                        <span class="text">Batal</span>
                    </button>
                </div>
            </div>
        </div>
    </div>   
</form>