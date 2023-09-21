<?php

// Perulangan for
// Semuanya dimasukin kedalam for
// $angka = 1;
// $angkaMaks = 30;

// for($angka; $angka <= 30; $angka++){
//     echo "Perulangan for ke - " . $angka;
//     echo "<br>";
// }

// Perulangan while
// Meriksa dulu baru melakukan perulangan
// $angka = 0;

// while ($angka <= 60){
//     $angka = $angka + 5;
//     echo "Perulangan while ke - " . $angka;
//     echo "<br>";
// }

// while($angka <= 20){
//     $angka++;
//     echo "While ke- $angka";
//     echo"<br>";
// }

// while($angka <= 20) :
//     echo "While ke- $angka";
//     $angka++;
//     echo"<br>";
// endwhile;

// do while
// Proses dulu baru ngecek
// $angka = 1;


// do {
//     echo "Do while ke - $angka";
//     $angka++;
//     echo "<br>";
   
// }while($angka <= 40);

// Foreach loop -> array
// $makanan = array("Sate'", "Pempeq", "Syeblaq", "Syeqer", "Baksyo'");
// $a = 2;

// foreach($makanan as $food){
//     echo $a+ 1 . " . " . $makanan[$a];
//     echo "<br>";
// }

// foreach ($makanan as $food){
//     echo $a++ . " iyaaaa " . $food;
//     echo "<br>";
// }

// Break/Continue
$a = 0;

for($a; $a<=30; $a++){
    if($a == 1){
        continue;
    }

    echo "Loop Break ke - " . $a;
    echo "<br>";
}

?>