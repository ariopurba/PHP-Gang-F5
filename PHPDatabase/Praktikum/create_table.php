<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE stok_barang (
kode VARCHAR(5) NOT NULL,
nama VARCHAR(20) NOT NULL,
jenis VARCHAR(12) NOT NULL,
lokasi VARCHAR(5) NOT NULL,
harga DECIMAL NOT NULL,
jumlah Integer NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table stok_barang created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>