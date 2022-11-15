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
    <title>Isi Keranjang</title>
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
        if(!isset($_SESSION['barang'])){
            echo "<h2 class='center'>Keranjang Masih Kosong</h2>";
            echo "<p class='center'><a href='daftarBarang.php'>[Pilih Barang]</a></p>";
        }else{
            $arrayBarang = $_SESSION['barang'];

            echo "<h1 class='center'>Isi Keranjang</h1>";
            echo "<p class='center'><a href='logout.php'>[logout]</a></p>";
            echo "<h3>Barang yang sudah anda pilih</h3>";
            echo "<ol>";
            foreach ($arrayBarang as $value){
                echo "<li> $value";
            }
            echo "</ol>";
            echo "<a href='daftarBarang.php'>kembali Pilih Barang</a>";
        }
    ?>
</body>
</html>