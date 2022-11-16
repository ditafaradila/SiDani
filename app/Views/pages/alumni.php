<?= $this->extend('template')?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <!-- Judul -->
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/alumni">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <div class="container">
    <a href="/create" type="button" class="btn btn-primary"><i class="fa fa-pen"></i> + </a>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No.Hp</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tahun Lulus</th>
                            <th scope="col">Program Study</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Tempat Kerja</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody class="table-group-divider">
                    <?php $no = 1;
                        foreach ($alumni as $alm) :
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $alm['nama'] ?></td>
                            <td><?= $alm['email'] ?></td>
                            <td><?= $alm['nomor'] ?></td>
                            <td><?= $alm['angkatan'] ?></td>
                            <td><?= $alm['jk'] ?></td>
                            <td><?= $alm['tanggallahir'] ?></td>
                            <td><?= $alm['alamat'] ?></td>
                            <td><?= $alm['tahunlulus'] ?></td>
                            <td><?= $alm['program_study'] ?></td>
                            <td><?= $alm['pekerjaan'] ?></td>
                            <td><?= $alm['tempatkerja'] ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="/edit/<?= $alm['id'] ?>" type="button" class="btn btn-primary"><i class="fa fa-pen"></i>Edit</a>
                                    <a href="/cetakkartu/<?= $alm['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-print"></i>Cetak</a>
                                    <!-- <form method="POST" action="/delete/<?= $alm['id'] ?>">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                                    </form> -->
                                </div>
                            </td>
                        </tr>
                    <?php
                        endforeach
                    ?>
                    </tbody>
                </table>	

            </div>
        </div>
    </div>
</body>

<?= $this->endSection() ?>