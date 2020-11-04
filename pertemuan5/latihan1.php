<?php
// array
// varialble yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index yang dimulai dari 0


//membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// //cara baru
// $bulan = ["January", "Desember"];


// menampilkan array
// var_dump() / print_r()
// print_r($hari[2]);
// echo "<br>", $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo"<br>";
var_dump($hari);











?>