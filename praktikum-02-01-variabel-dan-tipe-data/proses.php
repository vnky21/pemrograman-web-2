<?php

$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : "";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latihan - Input Data</title>
</head>

<body>



    <div class="container mt-5">
        <?php if ($nim == "" || $nama == "" || $prodi == "") : ?>
            <p>Isi Semua Data. Klik <a href="input.php">di sini</a> untuk kembali</p>
        <?php
            die;
        endif; ?>

        <h3>DATA MAHASISWA</h3>
        <div class="card">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <?= $nim; ?>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <?= $nama; ?>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                        <?= $prodi; ?>
                    </div>
                </div>

                <div class="text-end">
                    <a class="btn btn-primary" href="input.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->


</body>

</html>