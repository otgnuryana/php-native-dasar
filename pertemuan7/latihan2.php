<?php
// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["gambar"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <img src="<?= $_GET["gambar"]; ?>">
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
    <ul>
        <li><a href="latihan1.php">Kembali ke daftar Mahasiswa</a></li>
    </ul>
</body>
</html>