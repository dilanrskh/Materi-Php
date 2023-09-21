<?php

// Var lokal hanya bisa diakses di dalam kurung function
// varLokal();
// function varLokal(){
//     $lokal = "Bisa diakses";
//     print "Variabel $lokal di dalam";
// }

// print "Variabel $lokal di luar";

// Variabel Publik
// Variabel bisa diakses diluar function
varPublik();
$publik = 1000;
function varPublik(){
    // $publik = 3000;
    // print "Permen harganya $publik";
    // echo "<br>";
}

echo "Jelly harganya $publik";

?>