<!-- Modal Edit Keputusan -->
<div class="modal fade modal-fullscreen-md-down" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Keputusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- form --}}
                <form id="edit-keputusan" action="" method="post">
                    @method("put")
                    @csrf
                    <div class="input-form d-flex">
                        <input type="hidden" name="id" id="id_keputusan">
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="kode-gejala" placeholder="kode gejala" name="kode_gejala" readonly>
                            <label for="kode-gejala">Kode Gejala</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="kode-kerusakan" placeholder="kode kerusakan" name="kode_kerusakan" readonly>
                            <label for="kode-kerusakan">Kode Kerusakan</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="mb" placeholder="MB" name="mb">
                            <label for="mb">MB</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="md" placeholder="MD" name="md">
                            <label for="md">MD</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">ubah</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- end modal edit keputusan --}}

{{-- modal tambah keputusan --}}
<div class="modal fade modal-fullscreen-md-down" id="storeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Keputusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- form edit --}}
                <form id="tambah-keputusan" action="{{ route('keputusan.store') }}" method="post">
                    @csrf
                    <div class="input-form d-flex">
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="kode-gejala" name="kode_gejala" required>
                            <label id='kode_app' for="kode-gejala">Kode Gejala</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="kode-kerusakan" name="kode_kerusakan" required>
                            <label id='kode_app' for="kode-kerusakan">Kode Kerusakan</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="mb" name="mb" required>
                            <label id='main_app' for="mb">MB</label>
                        </div>
                        <div class="form-floating mb-3 p-2 mx-2">
                            <input type="text" class="form-control" id="md" name="md" required>
                            <label id='main_app' for="md">MD</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- end modal tambah keputusan --}}

<script>
    function updateInput(idKeputusan, kodeGejala, kodeKerusakan, mb, md){
        document.getElementById("kode-gejala").value = kodeGejala;
        document.getElementById("kode-kerusakan").value = kodeKerusakan;
        document.getElementById("mb").value = mb;
        document.getElementById("md").value = md;
        document.getElementById("id_keputusan").value = idKeputusan;
    }

    function actionUbahKeputusan(params) {
        const formKeputusan = document.getElementById('edit-keputusan');
        formKeputusan.setAttribute('action', params);
        formKeputusan.setAttribute('method', 'POST');
        console.log(formKeputusan);
    }
</script>
