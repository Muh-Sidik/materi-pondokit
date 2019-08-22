<?php

// $nilai1 = 5;
// $nilai2 = 0;

// try {
//     if ($nilai2 == 0) {
//         throw new Exception("gak bisa dibagi angka 0");
//     }
//     $hasil = $nilai1/$nilai2;
//     echo $hasil
// } catch (Exception $errorLho) {
//     echo $errorLho->getMessage();
// }

// echo "Masukin namamu dong! :";
// $nama1 = fgets (STDIN);
echo "Masukin nama lagi dong! :";
$nama2 = fgets(STDIN);

try {
    if (trim($nama2) != "sidik") {
        throw new Exception("kamu bukan sidik, Pergi!!!");
    } else {
        echo "yak, anda adalah $nama2";
    }
} catch (Exception $errorLho) {
    echo $errorLho->getMessage();
}

//Exception bisa dirubah dengan mengubah classnya