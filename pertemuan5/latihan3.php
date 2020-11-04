<?php
$mahasiswa = [
    ["Nuryana", "01923827465", "Teknik Informatika", "otgnuryana@gmail.com"],
    ["Sahabat", "92049122481", "Teknik informatika", "sahabat@gmail.com"],
    ["Sahabat", "92049122481", "Teknik informatika", "sahabat@gmail.com"],
    ["Sahabat Noah", "92049122481", "Teknik informatika", "sahabatnoah@gmail.com"]
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
    <li>Nama : <?= $mhs[0];?></li>
    <li>NRP : <?= $mhs[1];?></li>
    <li>Jurusan : <?= $mhs[2];?></li>
    <li>Email : <?= $mhs[3];?></li>
</ul>
<?php endforeach; ?>

</body>
</html>