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
            @php
                $images = json_decode($item->image, true);
            @endphp
            @if (is_array($images))
                <div class="d-flex gap-2 flex-wrap">
                    @foreach ($images as $i => $img)
                        <div class="position-relative">
                            <img src="{{ asset('image/' . $img) }}" alt="Gambar {{ $i + 1 }}" class="img-thumbnail"
                                style="width: 80px; height: auto;">
                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 start-0 remove-image-btn"
                                data-index="{{ $i }}">×</button>
                            {{-- <a href="/dashboard/hapusgambar/{{ $item->id }}/{{ $i }}" type="button"
                                class="btn btn-danger btn-sm position-absolute top-0 start-0 remove-image-btn">
                                x
                            </a> --}}
                        </div>
                    @endforeach
                </div>
            @endif
            <br>
            <div class="input-group has-validation">
                <input name="image[]" type="file" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" accept=".png,.jpg,.jpeg" multiple>
                <input type="hidden" name="hapus_gambar" class="hapus-gambar-input">
                <div class="invalid-feedback">
                    Mohon masukkan gambar
                </div>
            </div>
            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti gambar
            </small>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <label for="validationCustom01" class="form-label">Link Project</label>
        </div>
        <div class="col-md-9">
            <input name="link" type="url" class="form-control" value="{{ $item->link_project }}" id="validationCustom01"
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
<script>
    document.addEventListener('DOMContentLoaded', function () {

        document.querySelectorAll('.remove-image-btn').forEach(btn => {
            btn.addEventListener('click', function () {

                const index = this.dataset.index;

                // ambil modal tempat tombol ini berada
                const modal = this.closest('.modal');

                // ambil hidden input di modal ini saja
                const hiddenInput = modal.querySelector('.hapus-gambar-input');

                let removedImages = hiddenInput.value
                    ? hiddenInput.value.split(',')
                    : [];

                removedImages.push(index);

                hiddenInput.value = removedImages.join(',');

                // hapus tampilan gambar
                this.closest('.position-relative').remove();
            });
        });

    });
</script>