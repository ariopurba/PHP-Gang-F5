<?php

// if ($ipk > 3.50){
//     echo "IPK Anda: ".$ipk;
//     echo "Dengan Pujian";
// }elseif($ipk > 3.0 && $ipk <= 3.50 ){
//     echo "IPK Anda: ".$ipk;
//     echo "Lulus Dengan: Sangat Memuaskan";
// }elseif($ipk <= 3.00 && $ipk >= 2.76){
//     echo "IPK Anda: ".$ipk;
//     echo "Lulus Dengan: Memuaskan";
// }else{
//     echo "IPK Anda: ".$ipk;
//     echo "Lulus Dengan: Tidak mendapat Predikat";

// }

// Jika Menggunakan Function
$ipk = $_POST['ipk'];

function ipk(string $nilai){
    if ($nilai > 3.50){
        // echo "IPK Anda: ".$ip;
        echo "Predikat Anda : Dengan Pujian";
    }elseif($nilai > 3.0 && $nilai <= 3.50 ){
        // echo "IPK Anda: ".$ip;
        echo "Lulus Dengan: Sangat Memuaskan";
    }elseif($nilai <= 3.00 && $nilai >= 2.76){
        // echo "IPK Anda: ".$ip;
        echo "Lulus Dengan: Memuaskan";
    }else{
        // echo "IPK Anda: ".$ip;
        echo "Lulus Dengan: Tidak mendapat Predikat";
    }
}
echo "Ipk Anda: $ipk <br>";
ipk($ipk);

// <form action=""></form>
?>