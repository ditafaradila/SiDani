<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/update/<?= $alumni['id'] ?>">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= $alumni['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="email" value="<?= $alumni['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor</label>
                <input type="text" class="form-control" name="nomor" id="nomor" aria-describedby="nomor" value="<?= $alumni['nomor'] ?>">
            </div>
            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" name="angkatan" id="angkatan" aria-describedby="angkatan" value="<?= $alumni['angkatan'] ?>">
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <select name="id_jk" id="id_jk">
                    <?php foreach ($jeniskelamin as $jeniskelamin) : ?>
                        <option value="<?= $jeniskelamin['id_jk'] ?>"><?=  $jeniskelamin['jk']?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" aria-describedby="tanggallahir" value="<?= $alumni['tanggallahir'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="<?= $alumni['alamat'] ?>">
            </div>
            <div class="mb-3">
                <label for="tahunlulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" name="tahunlulus" id="tahunlulus" aria-describedby="tahunlulus" value="<?= $alumni['tahunlulus'] ?>">
            </div>
            <div class="mb-3">
                <label for="program_study" class="form-label">Program Study</label><br>
                <select name="id_prodi" id="id_prodi">
                    <?php foreach ($program_study as $program_study) : ?>
                        <option value="<?= $program_study['id_prodi'] ?>"><?=  $program_study['program_study']?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="pekerjaan" value="<?= $alumni['pekerjaan'] ?>">
            </div>
            <div class="mb-3">
                <label for="tempatkerja" class="form-label">Tempat Kerja</label>
                <input type="text" class="form-control" name="tempatkerja" id="tempatkerja" aria-describedby="tempatkerja" value="<?= $alumni['tempatkerja'] ?>">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i>Submit</button>
</form>

<?= $this->endSection() ?>