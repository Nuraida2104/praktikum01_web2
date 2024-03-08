<?php
    echo "Hello world!";

    // membuat variabel
    $nama = "Nuraida";
    $jurusan = "teknik Informatika";
    $angkatan = 2023;

    //output
    echo "Nama saya adalah : " . $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" constant="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
</head>
<body>
    <h2><?php echo $nama; ?></h2>
    <p>
        saya kuliah di Jurasan <?= $jurusan; ?>
</p>
</body>
</html>