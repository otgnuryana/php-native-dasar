<?php 
// date
// untuk  menampilkan tanggal dengan format tertentu
//    echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
//    echo time();

// echo date("l", time()-60*60*24*360);
// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,7,2002));


//strtotime
echo date("l", strtotime("7 jan 2002"));














?>