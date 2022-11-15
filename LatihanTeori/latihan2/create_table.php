<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal_kuliah";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE jadwal_kuliah (
kode_mata_kuliah VARCHAR(255) NOT NULL ,
nama_mata_kuliah VARCHAR(255) NOT NULL,
kelas VARCHAR(255) NOT NULL,
pengampu_mata_kuliah VARCHAR(255) NOT NULL,
hari VARCHAR(255) NOT NULL,
jam VARCHAR(255) NOT NULL,
PRIMARY KEY (kode_mata_kuliah)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>