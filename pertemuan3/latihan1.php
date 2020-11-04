<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <table border="1" cellpadding="10" cellspacing="0">  
    <?php
    // for ( $i = 1; $i <= 3; $i++) {
    // echo"<tr>";
    // for( $j =1; $j <= 5; $j++) {
    //     echo "<td>$i,$j</td>";
    // }
    // echo "</tr>"; 
    // }
    ?>
    
    </table>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <=5; $i++ ) : ?>
    <?php if ( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
        <?php else : ?>
        <tr>
    <?php endif; ?>
       <?php for ( $j = 1; $j <=5; $j++ ) : ?>
            <td><?= "$i, $j"; ?></td>
       <?php endfor; ?>
       </tr>
    <?php endfor; ?>
</table>
</body>
</html>































<?php
//pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

// for( $i = 0 ; $i < 5; $i++) {
//     echo "Hello Sahabat<br>";
// }
// $i = 10;
// while( $i < 5 ) {
//     echo "Hello Sahabat<br>";
//     $i++;
// }
// }
// $i = 0;
// do {
//     echo "Hello Sahabat<br>";
//     $i++;
// }while ($i < 5);
?>
