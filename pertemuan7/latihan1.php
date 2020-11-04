<?php
// SUPERGLOBAL
// variable global milik php
// merupakan Array Associative

//  $_GET

$mahasiswa = [
    [
        "nama" => "Nuryana",
        "nrp" => "90237485335",
        "jurusan" => "Teknik Informatika",
        "email" => "otgnuryana@gmail.com",
        "gambar" => "tes.png"
    ],
    [
        
        "nrp" => "909837485335",
        "nama" => "Murad",
        "jurusan" => "Teknik Informatika",
        "email" => "muradyena@gmail.com",
        "gambar" => "tes.png"
        ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?>
                </a>
            </li>
        
        <?php endforeach; ?>
    </ul>
</body>
</html>