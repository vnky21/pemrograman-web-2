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
        <h3>INPUT DATA MAHASISWA</h3>
        <div class="card">
            <div class="card-body">
                <form action="proses.php" method="post">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" class="form-control" id="nim">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="prodi" aria-label="Default select example">
                                <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                                <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                <option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
                                <option value="S1 Bisnis Digital">S1 Bisnis Digital</option>
                                <option value="S1 Pendidikan Teknologi Informasi">S1 Pendidikan Teknologi Informasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-end">
                        <button class="btn btn-success" type="submit">Simpan Data</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->


</body>

</html>