<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Keranjang</title>
    <style>
        .center{
            text-align: center;
        }
        h1, h2{
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>
<body>
    <?php
        if(!isset($_POST['makanMinum']) && !isset($_POST['alatMandi']) && !isset($_POST['alatTulis'])){
            echo "<h2 class='center'>Keranjang Masih Kosong</h2>";
            echo "<p class='center'><a href='daftarBarang.php'>[Pilih Barang]</a></p>";
        }else{
            $barang = array();

            if(isset($_POST['makanMinum'])){
                $mMinum = $_POST['makanMinum'];
                $barang = array_merge($barang, $mMinum);
            }

            if(isset($_POST['alatMandi'])){
                $aMandi = $_POST['alatMandi'];
                $barang = array_merge($barang, $aMandi);
            }

            if(isset($_POST['alatTulis'])){
                $aTulis = $_POST['alatTulis'];
                $barang = array_merge($barang, $aTulis);
            }

            $_SESSION['barang'] = $barang;

            echo "<h2 class='center'>Barang sudah dimasukkan ke dalam keranjang</h2>";
            echo "<p class='center'><a href='daftarBarang.php'>[Pilih Barang] </a>";
            echo "<a href='keranjang.php'>[Lihat Keranjang]</a></p>";
        }
    ?>
</body>
</html>