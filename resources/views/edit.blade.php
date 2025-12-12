<form method="post" action="/dashboard/update/{{ $item->id }}" enctype="multipart/form-data"
    class="g-3 needs-validation" novalidate>
    @csrf
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Nama Project</label>
        </div>
        <div class="col-md-9">
            <input name="nama" type="text" class="form-control" value="{{ $item->nama_project }}"
                id="validationCustom01" placeholder="Masukkan Nama Project" required>
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
                placeholder="Masukkan Deskripsi Project" style="height: 100px"
                required>{{ $item->deskripsi_project }}</textarea>
            <div class="invalid-feedback">
                Mohon isi deskripsi project
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustomUsername" class="form-label">Upload Gambar Project</label>
        </div>
        <div class="col-md-9">
            <img src="{{ asset('image/' . $item->image) }}" alt="Foto Project" class="img-thumbnail mb-2"
                style="max-width: 200px;">
            <br>
            <div class="input-group has-validation">
                <input name="image" type="file" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" value="{{ asset('image/' . $item->image) }}" required>
                <div class="invalid-feedback">
                    Mohon masukkan gambar
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Link Project</label>
        </div>
        <div class="col-md-9">
            <input name="link" type="text" class="form-control" id="validationCustom01"
                placeholder="Masukkan Link Project" required>
            <div class="invalid-feedback">
                Mohon isi link project
            </div>
        </div>
    </div>
    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</form>