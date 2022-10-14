<?php
// array
// variabel dapat memiliki tipe data berbeda

    // $nama_array = ["ario", "tua", "purba"];
    // for ($i = 0; $i < count($nama_array) ;$i++){
    //     echo $nama_array[$i];
    // }
    // // var_dump($nama_array);
    // // echo "<br>";
    // // print_r($nama_array);
    // // //menampilkan satu elemen ja
    // // echo "<br>";
    // // echo $nama_array[2];
    $mahasiswa = ["ario", "205314094", "ariopurba37@gmail.com"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <li> Nama: <?php
        echo $mahasiswa[0];
        ?></li>
        <li>Nim:
            <?php
            echo $mahasiswa[1];
            ?>
        </li>
        <li>Email:
            <?php
            echo $mahasiswa[2];
            ?>
        </li>
    </ul>
</body>

</html>