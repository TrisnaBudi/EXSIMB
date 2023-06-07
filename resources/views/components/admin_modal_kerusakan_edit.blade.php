<!-- Modal Edit kerusakan -->
<div class="modal fade modal-fullscreen-md-down" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Kerusakan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form --}}
          <form id="edit-kerusakan" action="" method="post">
            @method("put")
            @csrf
            <div class="input-form d-flex">
                <input type="hidden" name="id" id="id_kerusakan">
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kode-kerusakan" name="kode_kerusakan" readonly>
                    <label for="kode-kerusakan">Kode Kerusakan</label>
                </div>
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kerusakan" name="kerusakan">
                    <label for="kerusakan">Kerusakan</label>
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
{{-- end modal edit kerusakan --}}

{{-- modal tambah kerusakan --}}
<div class="modal fade modal-fullscreen-md-down" id="kerusakanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kerusakan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- form edit --}}
          <form id="tambah-kerusakan" action="{{ route('kerusakan.store') }}" method="post">
            @csrf
            <div class="input-form d-flex">
                <input type="hidden" name="id" id="id_kerusakan">
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kode-kerusakan" name="kode_kerusakan" placeholder="kode kerusakan" required>
                    <label for="kode-kerusakan">Kode Kerusakan</label>
                </div>
                <div class="form-floating mb-3 p-2 mx-2">
                    <input type="text" class="form-control" id="kerusakan" name="kerusakan" placeholder="kerusakan" required>
                    <label for="kerusakan">Kerusakan</label>
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
{{-- end modal tambah kerusakan --}}

<script>
    function updateInput(idkerusakan, kode, kerusakan){
        document.getElementById("kode-kerusakan").value = kode;
        document.getElementById("kerusakan").value = kerusakan;
        document.getElementById("id_kerusakan").value = idkerusakan;
    }

    function actionUbahkerusakan(params) {
        const formkerusakan = document.getElementById('edit-kerusakan');
        formkerusakan.setAttribute('action', params);
        formkerusakan.setAttribute('method', 'POST');
        console.log(formkerusakan);
    }

</script>
