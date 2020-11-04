<?php 
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
}
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"]: 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman; 

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
</head>
<body>
    <h1>Daftar mahasiswa</h1>

<a href="tambah.php">Tambah data Mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="25" autofocus placeholder="masukan kata kunci" autocomplete="off">
    <button type="submit" name="cari">Cari</button>
</form>

<!-- navigasi -->
<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>

    <a href="?halaman=<?= $i; ?>">
    <?= $i ; ?></a>
    <?php endfor ;?>



<br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>

        </tr>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row ) : ?>
            
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> | 
                <a href="hapus.php?id=<?= $row["id"]; ?>"onclick ="return confirm('Yakin untuk menghapus ?')">hapus</a>

            </td>
            <td>
                <img src="img/<?= $row["gambar"]; ?>" width="50px">    
            </td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
<a href="logout.php">Logout</a>
    
</body>
</html>