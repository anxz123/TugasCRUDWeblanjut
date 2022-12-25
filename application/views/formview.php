<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-info text-center" role="alert">
            <h3>WEBLANJUT TUGAS 2001050005</h3>
        </div>
        <a href="<?= site_url('komponen005/tambah') ?>" class="mb-8 float-end btn btn-success"> tambah data </a><br>

        <div class="card text-bg-light mt-5 mb-3" style="max-width: 100rem;">
            <div class="card-header">Data Komponen</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">merek_005</th>
                            <th scope="col">kapasitas_005</th>
                            <th scope="col">harga_005</th>
                            <th scope="col">jenis_005</th>
                            <th colspan="2">aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($isi as $items) :
                        ?>
                            <tr>

                                <td><?= $items->id_komponen; ?></td>
                                <td><?= $items->merek_005; ?></td>
                                <td><?= $items->kapasitas_005; ?></td>
                                <td><?= $items->harga_005; ?></td>
                                <td><?= $items->jenis_005; ?></td>
                                <td>

                                    <a href="<?= site_url('komponen005/hapus/' .
                                                    $items->id_komponen) ?>" onclick="return confirm('anda yakin ingin menghapus?')" class="btn btn-danger"> delete </a>

                                    <a href="<?= site_url('komponen005/edit/' .
                                                    $items->id_komponen) ?>" class="btn btn-warning"> edit </a>


                                </td>
                            </tr>
                        <?php

                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>