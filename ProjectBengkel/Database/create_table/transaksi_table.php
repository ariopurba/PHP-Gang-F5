<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_bengkel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE transaksi (
idTransaksi INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
totalTransaksi VARCHAR(30) NOT NULL,
tglServie DATE NOT NULL,
FOREIGN KEY (idStaff) REFERENCES staff(idStaff),
FOREIGN KEY (idService) REFERENCES service(idService),
FOREIGN KEY (idPelanggan) REFERENCES pelanggan(idPelanggan)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>