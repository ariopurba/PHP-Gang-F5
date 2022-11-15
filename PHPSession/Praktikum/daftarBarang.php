<?php 
    session_start();
    if(! isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pilih Barang</title>
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
        <h1 class="center">Pilih Barang</h1>
        <?php echo "<h2 class='center'>Selamat datang ".$_SESSION['username']."</h2>"; ?>
        <p class="center"><a href="logout.php">[logout]</a></p>
        <form action="keranjangrespon.php" method="post">
            <h3>Makanan Minuman</h3>
            <p>
                <input type="checkbox" name="makanMinum[]" id="gula" value="Gula">
                <label for="gula">Gula</label><br>
                <input type="checkbox" name="makanMinum[]" id="teh" value="Teh">
                <label for="teh">Teh</label><br>
                <input type="checkbox" name="makanMinum[]" id="kopi" value="Kopi">
                <label for="kopi">Kopi</label><br>
                <input type="checkbox" name="makanMinum[]" id="susu" value="Susu">
                <label for="susu">Susu</label><br>
                <input type="checkbox" name="makanMinum[]" id="biskuit" value="Biskuit">
                <label for="biskuit">Biskuit</label>
            </p>
            <h3>Peralatan Mandi</h3>
            <p>
                <input type="checkbox" name="alatMandi[]" id="sikatGigi" value="Sikat Gigi">
                <label for="sikatGigi">Sikat Gigi</label><br>
                <input type="checkbox" name="alatMandi[]" id="pastaGigi" value="Pasta Gigi">
                <label for="pastaGigi">Pasta Gigi</label><br>
                <input type="checkbox" name="alatMandi[]" id="sabun" value="Sabun">
                <label for="sabun">Sabun</label><br>
                <input type="checkbox" name="alatMandi[]" id="shampoo" value="Shampoo">
                <label for="shampoo">Shampoo</label><br>
                <input type="checkbox" name="alatMandi[]" id="sabunCuciMuka" value="Sabun Cuci Muka">
                <label for="sabunCuciMuka">Sabun Cuci Muka</label>
            </p>
            <h3>Alat Tulis</h3>
            <p>
                <input type="checkbox" name="alatTulis[]" id="pensil" value="Pensil">
                <label for="pensil">Pensil</label><br>
                <input type="checkbox" name="alatTulis[]" id="penggaris" value="Penggaris">
                <label for="penggaris">Penggaris</label><br>
                <input type="checkbox" name="alatTulis[]" id="penghapus" value="Penghapus">
                <label for="penghapus">Penghapus</label><br>
                <input type="checkbox" name="alatTulis[]" id="ballpoint" value="Ballpoint">
                <label for="ballpoint">Ballpoint</label><br>
                <input type="checkbox" name="alatTulis[]" id="kertasHvs" value="Kertas HVS">
                <label for="kertasHvs">Kertas HVS</label>
            </p>
            <button type="submit">Masuk Keranjang</button>
            <a href="keranjang.php">lihat isi keranjang</a>
        </form>
    </body>
</html>