<?= $this->extend('templates')?>
<?= $this->section('content') ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notification</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>

    <body>
        <!-- Judul -->
        <div class="pagetitle">
        <h1>Pengumuman</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/notification">Event</a></li>
            <li class="breadcrumb-item active">Notification</li>
            </ol>
        </nav>
        </div>

        <div class="container">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Lampiran</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                    
                        <tbody class="table-group-divider">
                        <?php $no = 1;
                            foreach ($alumni as $alumni) :
                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $alumni->judul ?></td>
                                <td><?= $alumni->keterangan ?></td>
                                <td>
                                    <a class="btn btn-info" href="<?= base_url(); ?>/download/<?= $alumni->id_pengumuman; ?>">
                                    <i class="fa fa-download"></i>
                                    </a>
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
</html>
<?= $this->endSection() ?>