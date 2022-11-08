<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <?php
        $datas = [];

        for ($i = 1; $i <= 100; $i++) {
            $random = rand(1, 1000);
            array_push($datas, $random);
        }

        ?>

        <h2>Daftar 100 Angka Random</h2>
        <p>
            <?php foreach ($datas as $data) : ?>
                [<?= $data; ?>] |
            <?php endforeach; ?>
        </p>

        <h2>Daftar Angka Bilangan Genap</h2>

        <p>
            <?php foreach ($datas as $data) : ?>
                <?php if ($data % 2 == 0) : ?>
                    [<?= $data ?>] |
                <?php endif; ?>
            <?php endforeach; ?>
        </p>

    </div>
</body>

</html>