<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/storeP" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" aria-describedby="judul">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan">
            </div>
            <div class="mb-3">
                    <label for="berkas" class="form-label">Lampiran</label>
                    <input type="file" class="form-control-file" name="berkas" id="berkas">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="fa fa-paper-plane"></i> Submit</button>
</form>
<?= $this->endSection() ?>