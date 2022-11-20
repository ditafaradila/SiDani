<?= $this->extend('templates')?>
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

    <!-- <form method="GET" action="" class="form-group">
    <div class="row">
    	<div class="col-lg-12">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
			  </div>
			</div>
		</div>
    	<div class="col-lg-12">
    		<?php //echo $jumlah; ?>
    	</div>
    </div>
    </form> -->

    <div class="container">
    <a href="/create" type="button" class="btn btn-primary"><i class="fa fa-pen"></i> + </a>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <!-- <th scope="col">Email</th>
                            <th scope="col">No.Hp</th> -->
                            <th scope="col">Angkatan</th>
                            <!-- <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th> -->
                            <th scope="col">Tahun Lulus</th>
                            <!-- <th scope="col">Program Study</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Tempat Kerja</th> -->
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
                            <td><?= $alm['angkatan'] ?></td>
                            <td><?= $alm['tahunlulus'] ?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="/detail/<?= $alm['id'] ?>" type="button" class="btn btn-primary" style="3px"><i class="fa fa-info-circle"></i></a>
                                    <a href="/cetakkartu/<?= $alm['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-print"></i></a>
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