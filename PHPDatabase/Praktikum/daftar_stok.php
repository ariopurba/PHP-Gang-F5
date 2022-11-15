<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'inventaris';

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if(!$conn){
    die("Connection Faild: ".mysqli_connect_error());
}

$sql = "SELECT * FROM stok_barang";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)> 0){
    // output data setiap baris
    echo "<table><tr><th>No</th><th>Kode</th><th>Nama Barang</th><th>Jenis</th><th>Lokasi</th><th>Harga Satuan</th><th>Jumlah Stok</th>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['kode']."</td><td>".$row['kode']."</td><td>".$row['nama']."</.td><td>".$row['jenis']."</.td><td>".$row['lokasi']."</.td><td>".$row['harga']."</.td><td>".$row['jumlah']."</.td></tr>";
    }
}else{
    echo "0 hasil";
}

mysqli_close($conn);
?>
<style>
    table, th, td{
        border: 1px solid black;
    }
</style>