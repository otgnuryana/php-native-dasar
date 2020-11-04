<?php
// $mahasiswa = [
//     ["Nuryana", "01923827465", "Teknik Informatika", "otgnuryana@gmail.com"],
//     ["92049122481", "Sahabat", "Teknik informatika", "sahabat@gmail.com"]
// ];
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        "nama" => "murad",
        "jurusan" => "Teknik Informatika",
        "email" => "muradyena@gmail.com",
        "gambar" => "bitnami.jpg"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
    <li>
    <img src="<?php $mhs["gambar"]; ?>">
    </li>
    <li>Nama : <?= $mhs["nama"];?></li>
    <li>NRP : <?= $mhs["nrp"];?></li>
    <li>Jurusan : <?= $mhs["jurusan"];?></li>
    <li>Email : <?= $mhs["email"];?></li>
</ul>
<?php endforeach; ?>

</body>
</html>