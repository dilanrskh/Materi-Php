<?php

// String
// var_dump -> dia ngasih tau tipe datanya dan jumlahnya

// $dataString = "Sate";
// echo "Makanan kesukaan saya adalah $dataString";
// echo "<br>";
// print $dataString;
// echo "<br>";
// var_dump($dataString);
// echo "<br>";
// print_r($dataString);

// Number

// $dataNumber = 200.7968;
// echo "Nomor nya $dataNumber";
// echo "<br>";
// print $dataNumber;
// echo "<br>";
// var_dump($dataNumber);
// echo "<br>";
// print_r($dataNumber);

// Boolean
// Kalau manggil pake variabel 
// Maka 1 = true
// dan false = kosong
// $dataBoolean = true;

// echo "Hasilnya jjkgkl";

// echo "<br>";
// if($dataBoolean){
//     echo "Hasilnya $dataBoolean";
// }else{
//     echo "Hasilnya $dataBoolean";
// }

// Null
// $dataNull = null;
// $dataNull2 = 60;

// print "Ini data nya $dataNull2";
// echo "<br>";

// // // Pengecekan data null
// $cekNull = is_null($dataNull);
// echo $cekNull;
// var_dump($cekNull);

// Array
// $bias = array("Jk", "Jay", "Kiming", "Peceye");
// print "Bias saya $bias[1]";
// echo "<br>";
// echo $bias[0];
// echo "<br>";
// // array(berapa data { [index] tipedata(jumlahnya) isi datanya})
// var_dump($bias);

// Operasi Array

// Mengubah data -> rumusnya $variabel[index] = "Value"
// $bias[1] = "Beomgyu";
// echo $bias[1];
// echo "<br>";
// echo "Bias diurutannya adalah " . $bias[2] = "Jihoon"; 

// Menambahkan data di paling belakang, rumusnya -> $variabel[] = "Value
// echo $bias[] = "Guanlin";
// var_dump($bias);

// Hapus data pada array, rumusnya -> unset($variabel[indexnya])
// unset($bias[2]);
// var_dump($bias);

// Menghitung data di array, rumusnya -> count($variabel)
// echo count($bias);


// Mapping Array
// $nama = array (
//     "depan" => "Dila",
//     "tengah" => "Nur",
//     "belakang" => "Sakinah"
// );

// // cara akses nya, panggil bungkus paling luar atau variabel baru ["key"]
// echo $nama["tengah"];

// Mapping array dalam array
$nama = array (
    "depan" => "Dila",
    "tengah" => "Nur",
    "belakang" => "Sakinah",
    "alamat" => array(
        "kota" => "Bogor",
        "negara" => "Indonesia"
    )
);


echo $nama["depan"] . "Nur " . $nama["alamat"]["kota"]
?>