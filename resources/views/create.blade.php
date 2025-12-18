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
                <input name="image[]" type="file" class="form-control" accept=".png,.jpg,.jpeg"
                    id="validationCustomUsername" aria-describedby="inputGroupPrepend" multiple required>
                @error('image')<div class="text-danger small mt-1">{{ $message }}</div> @enderror
                @error('image.*')<div class="text-danger small mt-1">{{ $message }}</div> @enderror
                <div class="invalid-feedback">
                    Mohon masukkan gambar
                </div>
            </div>
            <small class="text-muted">
                Format png / jpg / jpeg, maksimal 2MB per gambar
            </small>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Link Project</label>
        </div>
        <div class="col-md-9">
            <input name="link" type="url" class="form-control" id="validationCustom01"
                placeholder="Masukkan Link Project" required>
            <div class="invalid-feedback">
                Mohon isi link project dengan benar
            </div>
        </div>
    </div>
    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
</form>
{{-- script validasi gambar create --}}
<script>
    document.getElementById('validationCustomUsername').addEventListener('change', function () {
        const files = this.files;
        const allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        for (let i = 0; i < files.length; i++) {
            if (!allowedTypes.includes(files[i].type)) {
                Swal.fire({
                    icon: "error",
                    title: "Format gambar tidak valid.",
                    text: "Format hanya png, jpg, jpeg.",
                });
                this.value = '';
                return;
            }

            if (files[i].size > maxSize) {
                Swal.fire({
                    icon: "error",
                    title: "Ukuran gambar terlalu besar.",
                    text: "Maksimal ukuran 2 Mb",
                });
                this.value = '';
                return;
            }
        }
    });
</script>