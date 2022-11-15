<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal_kuliah";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['tambah'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $pengampu= $_POST['pengampu'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO jadwal_kuliah VALUES('$kode', '$nama', '$kelas', '$pengampu', '$hari', '$jam')";
    if (mysqli_query($conn, $sql)) {
        echo "Jadwal Berhasil Ditambah<br>";
        echo "<a href='tampil.php'>Tampilkan Jadwal</a>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

?>