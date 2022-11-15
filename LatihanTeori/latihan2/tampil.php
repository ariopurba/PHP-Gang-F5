<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal_kuliah";
$count = 1;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Cek Koneksi
if (!$conn) {
    die("Connection Faild: " . mysqli_connect_error());
}

$sql = "SELECT * FROM jadwal_kuliah";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data setiap baris
    echo "<table><tr><th>No</th><th>Kode</th><th>Nama Mata Kuliah</th><th>Kelas</th><th>Dosen Pengampu</th><th>Hari</th><th>Jam</th>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $count. "</td><td>" . $row['kode_mata_kuliah'] . "</td><td>" . $row['nama_mata_kuliah'] . "</.td><td>" . $row['kelas'] . "</.td><td>" . $row['pengampu_mata_kuliah'] . "</.td><td>" . $row['hari'] . "</.td><td>" . $row['jam'] . "</.td></tr>";
        $count++;
    }
} else {
    echo "0 hasil";
}

mysqli_close($conn);
?>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>