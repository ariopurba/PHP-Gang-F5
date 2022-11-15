<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'platformdb';

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek Koneksi
if(!$conn){
    die("Connection Failde: ".mysqli_connect_error());
}

$sql = "SELECT nama, nim FROM mahasiswa";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)> 0){
    // output data setiap baris
    echo "<table><tr><th>NIM</th><th>Nama</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>".$row['nim']."</td><td>".$row['nama']."</.td></tr>";
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