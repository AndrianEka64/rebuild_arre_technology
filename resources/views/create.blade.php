<form method="post" action="/dashboard/store" enctype="multipart/form-data" class="g-3 needs-validation" novalidate>
    @csrf
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Nama Project</label>
        </div>
        <div class="col-md-9">
            <input name="nama" type="text" class="form-control" id="validationCustom01"
                placeholder="Masukkan Nama Project" required>
            <div class="invalid-feedback">
                Mohon isi nama project
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom02" class="form-label">Deskripsi Project</label>
        </div>
        <div class="col-md-9">
            <textarea name="deskripsi" type="text" class="form-control" id="validationCustom02"
                placeholder="Masukkan Deskripsi Project" style="height: 100px" required></textarea>
            <div class="invalid-feedback">
                Mohon isi deskripsi project
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Upload Foto Project</label>
        </div>
        <div class="col-md-9">
            <div class="input-group has-validation">
                <input name="image" type="file" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Mohon masukkan gambar
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>